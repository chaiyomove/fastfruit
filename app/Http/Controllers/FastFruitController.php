<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Carbon\Carbon;
use App\Product_sprints;
use App\Orchards;
use App\Orchard_plots;
use App\Fruits;
use App\Fruit_species;
use App\Provinces;
use App\Matchings;
use App\Admins;
use App\Users;
use Auth;
use DB;
use App\Http\Requests\AddOrchardRequest;
use App\Http\Requests\AddPlotRequest;
use App\Http\Requests\AddProductRequest;
use App\Http\Requests\MatchOrchardRequest;
use App\Http\Requests\ContactUsRequest;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\LengthAwarePaginator;
use Mail;
use App\Post;
use Session;

class FastFruitController extends Controller
{
    public function orchards()
    {
        $orchards=Orchards::orderBy('idOrchard','desc')->paginate(9);
         // $orchard=$orchards[2];

        $popOrchards =Orchards::orderBy('views','desc')->take(5)->get();
        return view('orchards',compact('orchards','popOrchards'));
    }

    public function orchardDetail($id)
    {
        $orchard = Orchards::findOrFail($id); 

        //views counter
        $orchard->views = ($orchard->views)+1;
        $orchard->save();

        $popOrchards = Orchards::orderBy('views','desc')->take(5)->get();
        $products = array();
        
        foreach (Orchards::findOrFail($id)->orchardPlots as $key => $plot) {
            foreach ($plot->productSprints as $key => $product) {
                $products[] = $product;
            }    
        }


        return view('orcharddetail',compact('orchard','products','popOrchards'));
    }
    
    public function createPlot($id)
    {
        $provinces = DB::table('provinces')->orderBy('provinceName', 'asc')->get();
        $fruits = Fruits::all();
        $fruitSpecies = Fruit_species::all();
        $orchard = Orchards::findOrFail($id);
        return view('addplot', compact('provinces', 'fruits', 'fruitSpecies', 'id', 'orchard'));
    }    

    public function storePlot(AddPlotRequest $request)
    {
        $input = Request::all();
        if (array_get($input,'pictures')!==NULL){
            $pictures = array_values(array_get($input,'pictures'));
            for ($i=0 ; $i<count($pictures) ; $i++){
                if ($pictures[$i]!=NUll){
                    $picKeys = "picture".$i+1;
                    $picPath = $pictures[$i]->move(base_path('public_html\images\orchard_plots'));
                    $picPath = substr($picPath,strpos($picPath, "\public_html\\")+13);
                    $input["picture".($i+1)] = $picPath;   
                }
            }
        }
        // return $input;
        $plot = Orchard_plots::create($input);
        return redirect(url('orchards', [$plot->orchard->idOrchard]));
    }

    public function products()
    {
        $products=Product_sprints::orderBy('idProductSprint','desc')->paginate(9);
        $product=$products[2];
        return view('products',compact('products','product'));
    }

    public function productDetail($id)
    {
        $product = Product_sprints::findOrFail($id);
        $plot = $product->orchardPlot;
        $historys = $plot->productSprints;
        return view('productdetail',compact('product','plot','historys'));
    }

    public function getMatching()
    {
        $fruits = Fruits::all();
        $fruitSpecies = Fruit_species::all();
        $provinces = DB::table('provinces')->orderBy('provinceName', 'asc')->get();
        

        // $matchings = DB::table('Matchings')->where('idUser',Auth::user()->id);

        if (Auth::check()){
            $matchings = Matchings::where('idUser',Auth::user()->id)->get();
            $orchards = Orchards::latest()->get();
            $matchedOrcs = array(); 
                   
            foreach ($matchings as $key => $matching) {
                foreach ($orchards as $key => $orchard) {
                   $orchardPlots = $orchard->orchardPlots; 
                   foreach ($orchardPlots as $key => $orchardPlot) {
                        if ($matching->idFruitSpecie == $orchardPlot->idFruitSpecie){
                            // array_push($matchedOrcs, $orchard->idOrchard);
                            $matchedOrcs[] = $orchard;
                            // foreach ($matchedOrcs as $key => $idOrchard) {
                            //     echo $idOrchard;
                            //     echo "<br><hr>";
                            // }
                        }
                    } 
                }
                // echo $matching->idFruitSpecie;
                // echo "<br><hr>";
            }
            



            // 
            // 
            //dd($matchings->idFruitSpecie);
            return view('match', compact('fruits','fruitSpecies','provinces','matchings','matchedOrcs'));
        }
        
        // return dd($matchings);
        // return dd($fruits);
        // return view('match', compact('fruits','fruitSpecies','provinces'));
    }

    public function postMatching(MatchOrchardRequest $request)
    {
        $input = Request::all();

        if (Auth::check()){
            $input['idUser'] = Auth::user()->id;
        } else {
            $input['idUser'] = 0;
        }

        unset($input['fruit']);
       

        if ( $input['unit']==2){
            $input['fruitNum']= $input['fruitNum']*1000;

        }

        // dd($input);
        Matchings::create($input);
        // dd($input);
        return redirect('matching');
    }

    public function deleteMatching()
    {
        $input = Request::all();
        
        // return dd($input['idMatching']);
        Matchings::destroy($input['idMatching']);
        return redirect(action('FastFruitController@getMatching'));
    }
    

    public function getContactUs()
    {
        return view('contact');
    }

     public function postContactUs(ContactUsRequest $request)
    {
        $data = array(
                'email'=> $request->email,
                'subject'=> $request->subject,
                'bodyMessage'=> $request->message
            );

        Mail::send('emails.contactus',$data,function($message) use($data){
            $message->from($data['email']);
            $message->to('fastfruit.me@gmail.com');
            $message->subject($data['subject']); 

        });

        Session::flash('success','your email was send!');
        return redirect('/');
    }

    public function chat()
    {
        return view('chat');
    }

    public function userProfile()
    {
        return view('FirstLogin');
    }

    // public function userProfile($id)
    // {
    //     return view('FristLogin');
    // }

    public function getAddOrchard()
    {
        $provinces = DB::table('provinces')->orderBy('provinceName', 'asc')->get();
        return view('AddOrchard', compact('provinces'));
    }

    public function postAddOrchard(AddOrchardRequest $request)
    {
        $input = Request::all();

        if (array_get($input,'pictures')!==NULL){
            $pictures = array_values(array_get($input,'pictures'));
            for ($i=0 ; $i<count($pictures) ; $i++){
                if ($pictures[$i]!=NUll){
                    $picKeys = "picture".$i+1;
                    $picPath = $pictures[$i]->move(base_path('public_html\images\orchards'));
                    $picPath = substr($picPath,strpos($picPath, "\public_html\\")+13);
                    $input["picture".($i+1)] = $picPath;   
                }
            }
        }

        // return dd($input);

        $orchard = Orchards::create($input);
        $user = Auth::user();

        $user->orchards()->save($orchard);

        // $admin = new Admins();
        // $admin->idUser = Auth::user()->id;
        // $admin->idOrchard = Orchards::latest()->first()->idOrchard;
        // $admin->save();
        return redirect('userorchard');
    }

    public function checkGap()
    {
        return view('checkgap');
    }

    public function updateOrchard()
    {
        return view('EditOrchard');
    }

    public function editUser($id)
    {
        $user =  Users::findOrFail($id);
        $provinces = DB::table('provinces')->orderBy('provinceName', 'asc')->get();
        return view('updateuser', compact('user', 'provinces'));
    }

    public function updateUser($id)
    {
        $input = Request::all();
        if (array_get($input,'picture')!==NULL){
            $picture = array_get($input,'picture');
            if ($picture!=NUll){
                $picPath = $picture->move(base_path('public_html\images\users'));
                $picPath = substr($picPath,strpos($picPath, "\public_html\\")+13);
                $input["userPicture"] = $picPath;   
            }
        }
        // return $input;
        $input['address'] = trim($input['address']);
        Users::find($id)->update($input);
        return redirect('dashboard');

    }

    public function userOrchard()
    {
        $admins = Auth::user()->admins;
        $orchards = array();
        foreach ($admins as $key => $admin) {
            $orchards[] = $admin->orchard;
        }
        // return $orchards;
        return view('OrchardProfile',compact('orchards'));
    }

    public function userProduct()
    {
        return view('AfterLogin');
    }

    public function getUserAddProduct($id)
    {
        $fruits = Fruits::all();
        $fruitSpecies = Fruit_species::all();

        return view('AddFruit', compact('fruits','fruitSpecies','id'));
    }

     public function postUserAddProduct(AddProductRequest $request)
    {
        $input = Request::all();
        if (array_get($input,'pictures')!==NULL){       
            $pictures = array_values(array_get($input,'pictures'));
            for ($i=0 ; $i<count($pictures) ; $i++){
                if ($pictures[$i]!=NUll){
                    $picKeys = "picture".$i+1;
                    $picPath = $pictures[$i]->move(base_path('public_html\images\fruits'));
                    $picPath = substr($picPath,strpos($picPath, "\public_html\\")+13);
                    $input["picture".($i+1)] = $picPath;   
                }
            }
        }

        // return dd($input);
        Product_sprints::create($input);
        // $sprint=new Product_sprints();
        // $sprint->fruitSpecie=$input['fruitSpecie'];
       
        return redirect('userproduct');
    }

    public function userMatching()
    {
        return view('Match2');
    }

    public function userAddadmin()
    {
        return view('AddAdmin');
    }

     public function userProductDetail()
    {
        $admins = Auth::user()->admins;
        $orchardPlots = array();
        $products = array();
        foreach ($admins as $key => $admin) {
            $orchardPlots[] = $admin->orchard->orchardPlots;
        }

        $orchardPlots = array_collapse($orchardPlots);
        
        foreach ($orchardPlots as $key => $orchardPlot) {
            $products[] = $orchardPlot->productSprints;
        }
        
        $products = array_collapse($products);
        $products = array_reverse($products);

        return view('ShowProduct',compact('products'));
    }

    // public function userProductDetail($id)
    // {
    //     return view('ShowProduct');
    // }


     public function dashboard()
    {   
        $admins = Auth::user()->admins;
        $orchardsTmp = new Collection;
        foreach ($admins as $key => $admin) {
            $orchardsTmp->push($admin->orchard);
        }

        // $orchards = $orchardsTmp->forPage($_GET['page'], 6);

        // $currentPageSearchResults = $col->slice(($currentPage - 1) * $perPage, $perPage)->all();

        // Get the current page from the url if it's not set default to 1
        $page = Input::get('page', 1); 

        // Number of items per page
        $perPage = 6;

        // Start displaying items from this number;
        $offSet = ($page * $perPage) - $perPage; // Start displaying items from this number

        // Get only the items you need using array_slice (only get 10 items since that's what you need)
        $itemsForCurrentPage = array_slice($orchardsTmp->toArray(), $offSet, $perPage, true);

        // Return the paginator with only 10 items but with the count of all items and set the it on the correct page
        // return new LengthAwarePaginator($itemsForCurrentPage, count($orchardsTmp), $perPage, $page);
        // return dd($orchards = new LengthAwarePaginator($itemsForCurrentPage, count($orchardsTmp), $perPage, $page));
        ($orchards = new LengthAwarePaginator($itemsForCurrentPage, count($orchardsTmp), $perPage, $page, ['path' => Request::url(), 'query' => Request::query()]));
        // return dd($orchards);       
       
        return view('DashBoard', compact('orchards','orchardsTmp'));
    }

    public function search()
    {
        $search = Request::get('search');
        $orchards = Orchards::latest()->get();
        // $orchard=$orchards[2];
        $fruitSpecies = fruit_species::all();
        $provinces = DB::table('provinces')->orderBy('provinceName', 'asc')->get();
        $matchedOrcs = array(); 

        foreach ($orchards as $key => $orchard) {
            if (str_contains($orchard->nameOrchard,$search)) {
                $matchedOrcs[] = $orchard;
            }
            if (str_contains($orchard->description,$search)) {
                $matchedOrcs[] = $orchard;
            }  
        }  

        foreach ($fruitSpecies as $key => $fruitSpecie) {
            if (str_contains($fruitSpecie->specieName,$search)) {
                $orchardPlots = $fruitSpecie->orchardPlots;
                foreach ($orchardPlots as $key => $orchardPlot) {
                    $matchedOrcs[] = $orchardPlot->orchard;
                }
                
            }   
        }

        foreach ($provinces as $key => $province) {
            if (str_contains($province->provinceName,$search)) {
                foreach ($province->orchards as $key => $orchard) {
                    $matchedOrcs[] = $orchard;
                }
            }               
        }

        $matchedOrcs = array_unique($matchedOrcs);
        $matchedOrcs = array_values($matchedOrcs);

        return view('search', compact('matchedOrcs'));
    }

    public function orchardProducts($id)
    {
        $products = array();

        if (str_contains(url()->previous(), "orchard")){
            foreach (Orchards::findOrFail($id)->orchardPlots as $key => $plot) {
                foreach ($plot->productSprints as $key => $product) {
                    $products[] = $product;
                }    
            }
        } else {
            foreach (Orchard_plots::findOrFail($id)->productSprints as $key => $product) {
                $products[] = $product;
            }    
        }
        return view('orchardProducts' , compact('products'));
    }

    public function map()
    {
        return view('map');
    }

     public function plots($id)
    {
        $plots=Orchards::findOrFail($id)->orchardPlots;
        return view('plot',compact('plots'));
    }

    public function plotsDetail($id)
    {
        $plot=Orchard_plots::findOrFail($id);
        return view('plotDetail',compact('plot'));
    }

    public function followorchards()
    {
        
        $user = Users::findOrFail(Auth::user()->id);
        $orchard = Orchards::findOrFail(array_get(Request::all(),'idOrchard'));
        $user->orchardFollowing()->save($orchard);
        return redirect(url()->previous());
    }

    
}

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
use App\Plot_status;
use App\Fruits;
use App\Fruit_species;
use App\Provinces;
use App\Matchings;
use App\Admins;
use App\Users;
use App\Reviews;
USE App\GapOrchards;
use Auth;
use DB;

use App\Http\Requests\AddOrchardRequest;
use App\Http\Requests\AddPlotRequest;
use App\Http\Requests\AddProductRequest;
use App\Http\Requests\MatchOrchardRequest;
use App\Http\Requests\ContactUsRequest;
use App\Http\Requests\UpdateOrchardRequest;
use App\Http\Requests\UpdatePlotRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Requests\UpdateUserRequest;

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
        $orchards = Orchards::orderBy('idOrchard','desc')->paginate(9);
        $popOrchards = Orchards::orderBy('views','desc')->take(5)->get();

        return view('orchards',compact('orchards','popOrchards'));
    }

    public function orchardDetail($id)
    {
        $orchard = Orchards::findOrFail($id); 
        //views counter
        $orchard->views = ($orchard->views)+1;
        $orchard->save();

        $popOrchards = Orchards::orderBy('views','desc')->take(5)->get();
        $reviews = $orchard->reviews;
        $products = collect();
        
        foreach ($orchard->orchardPlots as $key => $plot) {
            if ($plot->productSprints->last() != NULL) {
                $products[] = $plot->productSprints->last();
            } else {
                $products[] = $plot;
            }
        }

        // return $products;

        return view('orcharddetail',compact('orchard','products','popOrchards','reviews'));
    }

    public function createOrchard()
    {
        $provinces = DB::table('provinces')->orderBy('provinceName', 'asc')->get();
        return view('AddOrchard', compact('provinces'));
    }

    public function storeOrchard(AddOrchardRequest $request)
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
        return redirect('orchards/'.$orchard->idOrchard);
    }

    public function editOrchard($id)
    {
        $orchard= Orchards::findOrFail($id);
        $provinces = DB::table('provinces')->orderBy('provinceName', 'asc')->get();
        return view('EditOrchard',compact('orchard','provinces'));
    }

    public function updateOrchard(UpdateOrchardRequest $request,$id)
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

       
        $input['description'] = trim($input['description']);
        // return dd($input);
        Orchards::find($id)->update($input);
        

       
        return redirect('orchards/'.$id);
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

    public function plotDetail($id)
    {
        $plot = Orchard_plots::findOrFail($id);
        $popProducts = Product_sprints::orderBy('views','desc')->take(5)->get();
        return view('plotdetail',compact('plot', 'popProducts'));
    }    

    public function createPlot($id)
    {   
        $plotstatus = plot_status::all();
        $provinces = DB::table('provinces')->orderBy('provinceName', 'asc')->get();
        $fruits = Fruits::all();
        $fruitSpecies = Fruit_species::all();
        $orchard = Orchards::findOrFail($id);

        return view('addplot', compact('provinces', 'fruits', 'fruitSpecies', 'id', 'orchard', 'plotstatus'));
    }    

    public function storePlot(AddPlotRequest $request)
    {
        $input = Request::all();
        
        // return $input;
        $input['plotNumber'] = substr_replace($input['plotNumber'], "-", 6, 0);
        $input['plotNumber'] = substr_replace($input['plotNumber'], "-", 11, 0);

        $gapOrchard = GapOrchards::wherePlotnumber($input['plotNumber'])->get()->toArray();
        
        if ($input['idPlotStatus'] == 1) {
            if ($gapOrchard!=NULL) {
                $input['idPlotStatus'] = 1;
            } else {
                $input['idPlotStatus'] = 3;
            }
        }
        
        
        $plot = Orchard_plots::create($input);
        $orchard = Orchards::findOrFail(array_get($input, 'idOrchard'));        
        $orchard->orchardPlots()->save($plot);

        return redirect(url('plot', [$plot->idOrchardPlot]));
    }

    public function editPlot($id)
    {
        $plot=Orchard_plots::findOrFail($id);
        $fruits = Fruits::all();
        $fruitSpecies = Fruit_species::all();
        
        $plotstatus=plot_status::all();
        $provinces = DB::table('provinces')->orderBy('provinceName', 'asc')->get();
        return view('editPlot',compact('plot','provinces','fruits','fruitSpecies','plotstatus'));
    }

    public function updatePlot(UpdatePlotRequest $request,$id)
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

        // return dd($input);
        // $input['description'] = trim($input['description']);
       
        Orchard_plots::find($id)->update($input);
        
        return redirect('plot/'.$id);
    }

    public function products()
    {

        $products = Product_sprints::orderBy('idProductSprint','desc')->paginate(9);
        // $product=$products[2];
        $popProducts = Product_sprints::orderBy('views','desc')->take(5)->get();
        // $products->endDate->difForHumans();
        return view('products',compact('products','product','popProducts'));
    }

    public function productDetail($id)
    {   
        //views counting
        $product = Product_sprints::findOrFail($id);
        $product->views = ($product->views)+1;
        $product->save();
        $species= array();
        $orchard = $product->orchardPlot->orchard;
        foreach($orchard->orchardPlots as $plot){
            $species[] = $plot->fruitSpecie->specieName;
        }
        // return $species;

        $plot = $product->orchardPlot;
        $pvsProducts = $plot->productSprints->reverse();
        $popProducts = Product_sprints::orderBy('views','desc')->take(5)->get();

        return view('productdetail',compact('orchard', 'plot', 'product', 'pvsProducts', 'popProducts'));
    }

    public function createProduct($id)
    {
        $fruits = Fruits::all();
        $fruitSpecies = Fruit_species::all();
        $plot = Orchard_plots::findOrFail($id);

        return view('addproduct', compact('fruits', 'fruitSpecies', 'id', 'plot'));
    }

     public function storeProduct(AddProductRequest $request)
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

        $product = Product_sprints::create($input);
        $plot = Orchard_plots::findOrFail(array_get($input, 'idOrchardPlot'));
        $plot->productSprints()->save($product);
       
        return redirect(url('product', [$product->idProductSprint]));
    }

    public function editProduct($id)
    {
        $product = Product_sprints::findOrFail($id);
        $fruits = Fruits::all();
        $fruitSpecies = Fruit_species::all();

        return view('editProduct',compact('product','fruits','fruitSpecies'));
    }

    public function updateProduct(UpdateProductRequest $request,$id)
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
        $input['description'] = trim($input['description']);
       
        Product_sprints::find($id)->update($input);
        return redirect('product/'.$id);

    }

    public function createMatching()
    {
        $fruits = Fruits::all();
        $fruitSpecies = Fruit_species::all();
        $provinces = DB::table('provinces')->orderBy('provinceName', 'asc')->get();
        
        $matchings = collect();
        $matchedOrcs = collect(); 
        $orchards = Orchards::latest()->get();

        // $matchings = DB::table('Matchings')->where('idUser',Auth::user()->id);

        if (Auth::check()){
            $matchings = Matchings::where('idUser',Auth::user()->id)->get();
        } else {
            $matchings = Matchings::where('_token', csrf_token())->get();
        }

        foreach ($matchings as $key => $matching) {
            foreach ($orchards as $key => $orchard) {
               $orchardPlots = $orchard->orchardPlots; 
               foreach ($orchardPlots as $key => $orchardPlot) {
                    if ($matching->idFruitSpecie == $orchardPlot->idFruitSpecie){
                        // array_push($matchedOrcs, $orchard->idOrchard);
                        $matchedOrcs[] = $orchard;
                    }
                } 
            }
        }
        return view('match', compact('fruits','fruitSpecies','provinces','matchings','matchedOrcs'));
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

    public function showMatching($id)
    {
        return redirect(url('matching#results'));
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
            $message->to('fruit-470313@inbox.mailtrap.io');
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

    

    public function checkGap()
    {
        return view('checkgap');
    }

    

    public function editUser($id)
    {
        $user =  Users::findOrFail($id);
        $provinces = DB::table('provinces')->orderBy('provinceName', 'asc')->get();
        return view('editProfile', compact('user', 'provinces'));
    }

    public function updateUser(UpdateUserRequest $request,$id)
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
        return redirect(url('profile',[$id]));

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
        $matchedOrcs = collect();
        $popOrchards =Orchards::orderBy('views','desc')->take(5)->get();

        // Orchards => nameOrchard, description
        foreach ($orchards as $key => $orchard) {
            if (str_contains($orchard->nameOrchard,$search)) {
                $matchedOrcs[] = $orchard;
            }
            if (str_contains($orchard->description,$search)) {
                $matchedOrcs[] = $orchard;
            }  
        }  

        // Orchards->OrchardPlots => fruitspecie
        foreach ($fruitSpecies as $key => $fruitSpecie) {
            if (str_contains($fruitSpecie->specieName,$search)) {
                $orchardPlots = $fruitSpecie->orchardPlots;
                foreach ($orchardPlots as $key => $orchardPlot) {
                    $matchedOrcs[] = $orchardPlot->orchard;
                }
                
            }   
        }

        // Orchards => province
        foreach ($provinces as $key => $province) {
            if (str_contains($province->provinceName,$search)) {
                foreach ($province->orchards as $key => $orchard) {
                    $matchedOrcs[] = $orchard;
                }
            }               
        }

        // $matchedOrcs = array_unique($matchedOrcs);
        // $matchedOrcs = array_values($matchedOrcs);
        $matchedOrcs = $matchedOrcs->unique();
        $matchedOrcs = $matchedOrcs->values();

        $page = Input::get('page', 1); 

        // Number of items per page
        $perPage = 2;

        // Start displaying items from this number;
        $offSet = ($page * $perPage) - $perPage; // Start displaying items from this number

        // Get only the items you need using array_slice (only get 10 items since that's what you need)
        // $itemsForCurrentPage = array_slice($matchedOrcs->toArray(), $offSet, $perPage, true);
        $itemsForCurrentPage = $matchedOrcs->slice($offSet, $perPage, true);

        // Return the paginator with only 10 items but with the count of all items and set the it on the correct page
        // return new LengthAwarePaginator($itemsForCurrentPage, count($orchardsTmp), $perPage, $page);
        // return dd($orchards = new LengthAwarePaginator($itemsForCurrentPage, count($orchardsTmp), $perPage, $page));
        ($results = new LengthAwarePaginator($itemsForCurrentPage, count($matchedOrcs), $perPage, $page, ['path' => Request::url(), 'query' => Request::query()]));
        return view('search', compact('matchedOrcs','popOrchards','results'));
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

    

    public function followorchards()
    {
        
        $user = Users::findOrFail(Auth::user()->id);
        $orchard = Orchards::findOrFail(array_get(Request::all(),'idOrchard'));
        $user->orchardFollowing()->save($orchard);
        return redirect(url()->previous());
    }

    public function followusers()
    {
        
        $user = Users::findOrFail(Auth::user()->id);
        
    }

    public function profile($id)
    {

        $user = Users::findOrFail($id);
        $orchards = $user->orchards;
        $bookmarks = $user->userBookmarks;
        $followorchards = $user->orchardFollowing;
        $followusers = $user->Followings;
        return view('dashboard',compact('user','orchards','bookmarks','followorchards','followusers'));
    }

    public function storeReview($id)
    {
        // $this->validate($request, array(
        //     'name' => 'required|max:255',
        //     'email' => 'required|email|max:255',
        //     'review' => 'required|min:5|max:2000'
        //     ));

        $orchard = Orchards::find($id);
        if (Auth::check()){
            $user = Auth::user();
        } else {
            $user = Users::find(0);
        }
       
        $input = Request::all();
        $input['approved'] = 1;
        $input['idOrchard'] = $id;
        $input['idUser'] = $user->id;
        $input['name'] = $user->firstName;
        $input['email'] = $user->email;



        $review = Reviews::create($input);
        $orchard->reviews()->save($review);
        $user->reviews()->save($review);

        // Session::flash('Success')

        return redirect(url('/orchards', [$orchard->idOrchard]));
    }

    public function notifications()
    {
        
        return view('notification');
        
    }



}


  
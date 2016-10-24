;(function(window){'use strict';function extend(a,b){for(var key in b){if(b.hasOwnProperty(key)){a[key]=b[key];}}
return a;}
var is3d=!!getStyleProperty('perspective'),supportTransitions=Modernizr.csstransitions,transEndEventNames={'WebkitTransition':'webkitTransitionEnd','MozTransition':'transitionend','OTransition':'oTransitionEnd','msTransition':'MSTransitionEnd','transition':'transitionend'},transEndEventName=transEndEventNames[Modernizr.prefixed('transition')];function ElastiStack(el,options){this.container=el;this.options=extend({},this.options);extend(this.options,options);this._init();}
function setTransformStyle(el,tval){el.style.WebkitTransform=tval;el.style.msTransform=tval;el.style.transform=tval;}
ElastiStack.prototype.options={distDragBack:200,distDragMax:450,onUpdateStack:function(current){return false;}};ElastiStack.prototype._init=function(){this.items=[].slice.call(this.container.children);this.itemsCount=this.items.length;this.current=0;this._setStackStyle();if(this.itemsCount<=1)return;this._initDragg();this._initEvents();};ElastiStack.prototype._initEvents=function(){var self=this;this.draggie.on('dragStart',function(i,e,p){self._onDragStart(i,e,p);});this.draggie.on('dragMove',function(i,e,p){self._onDragMove(i,e,p);});this.draggie.on('dragEnd',function(i,e,p){self._onDragEnd(i,e,p);});};ElastiStack.prototype._setStackStyle=function(){var item1=this._firstItem(),item2=this._secondItem(),item3=this._thirdItem();if(item1){item1.style.opacity=1;item1.style.zIndex=4;setTransformStyle(item1,is3d?'translate3d(0,0,0)':'translate(0,0)');}
if(item2){item2.style.opacity=1;item2.style.zIndex=3;setTransformStyle(item2,is3d?'translate3d(0,0,-60px)':'translate(0,0)');}
if(item3){item3.style.opacity=1;item3.style.zIndex=2;setTransformStyle(item3,is3d?'translate3d(0,0,-120px)':'translate(0,0)');}};ElastiStack.prototype._moveAway=function(instance){this._disableDragg();classie.add(instance.element,'animate');var tVal=this._getTranslateVal(instance);setTransformStyle(instance.element,is3d?'translate3d('+ tVal.x+'px,'+ tVal.y+'px, 0px)':'translate('+ tVal.x+'px,'+ tVal.y+'px)');instance.element.style.opacity=0;var item2=this._secondItem(),item3=this._thirdItem();if(item2){classie.add(item2,'move-back');classie.add(item2,'animate');setTransformStyle(item2,is3d?'translate3d(0,0,-60px)':'translate(0,0)');}
if(item3){classie.add(item3,'move-back');classie.add(item3,'animate');setTransformStyle(item3,is3d?'translate3d(0,0,-120px)':'translate(0,0)');}
var self=this,onEndTransFn=function(){instance.element.removeEventListener(transEndEventName,onEndTransFn);setTransformStyle(instance.element,is3d?'translate3d(0,0,-180px)':'translate(0,0,0)');instance.element.style.left=instance.element.style.top='0px';instance.element.style.zIndex=-1;classie.remove(instance.element,'animate');self.current=self.current<self.itemsCount- 1?self.current+ 1:0;var item1=self._firstItem(),item2=self._secondItem(),item3=self._thirdItem();classie.remove(item1,'move-back');if(item2)classie.remove(item2,'move-back');if(item3)classie.remove(item3,'move-back');setTimeout(function(){classie.add(self._lastItem(),'animate');self._setStackStyle();},25);self._initDragg();self._initEvents();self.options.onUpdateStack(self.current);};if(supportTransitions){instance.element.addEventListener(transEndEventName,onEndTransFn);}
else{onEndTransFn.call();}};ElastiStack.prototype._moveBack=function(instance){var item2=this._secondItem(),item3=this._thirdItem();classie.add(instance.element,'move-back');classie.add(instance.element,'animate');setTransformStyle(instance.element,is3d?'translate3d(0,0,0)':'translate(0,0)');instance.element.style.left='0px';instance.element.style.top='0px';if(item2){classie.add(item2,'move-back');classie.add(item2,'animate');setTransformStyle(item2,is3d?'translate3d(0,0,-60px)':'translate(0,0)');}
if(item3){classie.add(item3,'move-back');classie.add(item3,'animate');setTransformStyle(item3,is3d?'translate3d(0,0,-120px)':'translate(0,0)');}};ElastiStack.prototype._onDragStart=function(instance,event,pointer){var item2=this._secondItem(),item3=this._thirdItem();classie.remove(instance.element,'move-back');classie.remove(instance.element,'animate');if(item2){classie.remove(item2,'move-back');classie.remove(item2,'animate');}
if(item3){classie.remove(item3,'move-back');classie.remove(item3,'animate');}};ElastiStack.prototype._onDragMove=function(instance,event,pointer){if(this._outOfBounds(instance)){this._moveAway(instance);}
else{var item2=this._secondItem(),item3=this._thirdItem();if(item2){setTransformStyle(item2,is3d?'translate3d('+(instance.position.x*.6)+'px,'+(instance.position.y*.6)+'px, -60px)':'translate('+(instance.position.x*.6)+'px,'+(instance.position.y*.6)+'px)');}
if(item3){setTransformStyle(item3,is3d?'translate3d('+(instance.position.x*.3)+'px,'+(instance.position.y*.3)+'px, -120px)':'translate('+(instance.position.x*.3)+'px,'+(instance.position.y*.3)+'px)');}}};ElastiStack.prototype._onDragEnd=function(instance,event,pointer){if(this._outOfBounds(instance))return;if(this._outOfSight(instance)){this._moveAway(instance);}
else{this._moveBack(instance);}};ElastiStack.prototype._initDragg=function(){this.draggie=new Draggabilly(this.items[this.current]);};ElastiStack.prototype._disableDragg=function(){this.draggie.disable();};ElastiStack.prototype._outOfBounds=function(el){return Math.abs(el.position.x)>this.options.distDragMax||Math.abs(el.position.y)>this.options.distDragMax;};ElastiStack.prototype._outOfSight=function(el){return Math.abs(el.position.x)>this.options.distDragBack||Math.abs(el.position.y)>this.options.distDragBack;};ElastiStack.prototype._getTranslateVal=function(el){var h=Math.sqrt(Math.pow(el.position.x,2)+ Math.pow(el.position.y,2)),a=Math.asin(Math.abs(el.position.y)/ h ) / ( Math.PI / 180 ),
hL=h+ this.options.distDragBack,dx=Math.cos(a*(Math.PI/180))*hL,dy=Math.sin(a*(Math.PI/180))*hL,tx=dx- Math.abs(el.position.x),ty=dy- Math.abs(el.position.y);return{x:el.position.x>0?tx:tx*-1,y:el.position.y>0?ty:ty*-1}};ElastiStack.prototype._firstItem=function(){return this.items[this.current];};ElastiStack.prototype._secondItem=function(){if(this.itemsCount>=2){return this.current+ 1<this.itemsCount?this.items[this.current+ 1]:this.items[Math.abs(this.itemsCount-(this.current+ 1))];}};ElastiStack.prototype._thirdItem=function(){if(this.itemsCount>=3){return this.current+ 2<this.itemsCount?this.items[this.current+ 2]:this.items[Math.abs(this.itemsCount-(this.current+ 2))];}};ElastiStack.prototype._lastItem=function(){if(this.itemsCount>=3){return this._thirdItem();}
else{return this._secondItem();}};window.ElastiStack=ElastiStack;})(window);
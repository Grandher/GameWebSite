(function (cjs, an) {

var p; // shortcut to reference prototypes
var lib={};var ss={};var img={};
lib.ssMetadata = [];


(lib.AnMovieClip = function(){
	this.actionFrames = [];
	this.ignorePause = false;
	this.gotoAndPlay = function(positionOrLabel){
		cjs.MovieClip.prototype.gotoAndPlay.call(this,positionOrLabel);
	}
	this.play = function(){
		cjs.MovieClip.prototype.play.call(this);
	}
	this.gotoAndStop = function(positionOrLabel){
		cjs.MovieClip.prototype.gotoAndStop.call(this,positionOrLabel);
	}
	this.stop = function(){
		cjs.MovieClip.prototype.stop.call(this);
	}
}).prototype = p = new cjs.MovieClip();
// symbols:
// helper functions:

function mc_symbol_clone() {
	var clone = this._cloneProps(new this.constructor(this.mode, this.startPosition, this.loop, this.reversed));
	clone.gotoAndStop(this.currentFrame);
	clone.paused = this.paused;
	clone.framerate = this.framerate;
	return clone;
}

function getMCSymbolPrototype(symbol, nominalBounds, frameBounds) {
	var prototype = cjs.extend(symbol, cjs.MovieClip);
	prototype.clone = mc_symbol_clone;
	prototype.nominalBounds = nominalBounds;
	prototype.frameBounds = frameBounds;
	return prototype;
	}


(lib.Korona = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Слой_1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#6DC7FF","#E6ABFF"],[0,1],0,10.7,0,-30.5).s().p("ABYA7QALACALAJQgCgKgSgKQgbgNh6gPQhsgMgqAAQAAgfAygkQAygiAAgSQE/BQAAA7QAAAmhIAZQg1ARgjAAQAYgUAOgfg");
	this.shape.setTransform(28.1297,6.8185,0.8519,0.8519);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.lf(["#6DC7FF","#E6ABFF"],[0,1],0,10.7,0,-30.5).s().p("AiIBdQhJgZAAgmQAAglCZg2QCEgwAiAAQAAASAyAiQAyAkAAAfQgpAAhtAMQh7APgaANQgTAKgBAKQAKgIALgDQAOAfAZAUQgjAAg0gRg");
	this.shape_1.setTransform(-28.0926,6.8185,0.8519,0.8519);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.lf(["#6DC7FF","#E6ABFF"],[0,1],0,22.7,0,-18.5).s().p("AgCCVQgEgBgBgDQgshXhTg0QgDgDgBgCQgCgCABgEQABgEAEgCQAqgUAeghQAigiAVgtQAAgDAFgCQACgCAEACQADABACAEQAoBXBVAtQADABACADQACAEgBADQgCAEgDACQhTA0gsBXQgBADgDABIgEABIgCgBg");
	this.shape_2.setTransform(-0.0027,-3.3824,0.8519,0.8519);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

	this._renderFirstFrame();

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-46,-16.1,92,32.3);


(lib.Gs = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Слой_1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#1A6DFF","#C822FF"],[0,1],0,30.7,0,-30.6).s().p("AjIDbQhZhZAAiTQgCh1BRhUQBRhVB0gCIANAAQBAgDA9AWQAvARAxgCQAIAAAEAFQAFAFAAAHIAAC7QAAAHgFAFQgFAFgHAAQgGAAgEgDQgEgEgCgFQgLgmgbgjQg0hEhRAAQhSAAgjBdQgRAvgBAvQAAA4AaBDQAnBiBGAAQAMABAJgJQAOgSgBgZIAAgHQAAgbgCgOQgEgZgNgNQgWgTgbACQgGAAgFgEQgFgFAAgIQAAgGAFgGQAGgFAFAAIERAAQAGAAAFAFQAFAFABAHQAAAGgEAFQgDAEgFACQgcAIgGAcQgGAWAABOIAAASQAAAHgDADQgpA3g5AWQgqAPg8AAQiTAAhYhYgAiyjKQhKBHgDBnIAAALQAACGBPBOQBOBOCFAAQA7AAAogRQAngSAfgnIAAgMQAAg7ACgWQADgjAMgTIiNAAQAPATAFAeQACAQAAAfIAAAGQABAmgXAcQgTAUgbgBQhZAAgwhwQgghMAAhDQAAhHAgg/QAuhXBbAAQA0AAAuAaQAtAaAbAsIAAhgQgugCgrgPQg5gTg6ACIgFAAQhkAAhJBFg");
	this.shape.setTransform(0.0213,0.037);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

	this._renderFirstFrame();

}).prototype = getMCSymbolPrototype(lib.Gs, new cjs.Rectangle(-28.9,-30.6,57.9,61.3), null);


(lib.Ganim = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Слой_1
	this.instance = new lib.Gs();

	this.timeline.addTween(cjs.Tween.get(this.instance).to({rotation:-8.1997},19).to({rotation:8.7398},20).to({rotation:0},20).wait(1));

	this._renderFirstFrame();

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-33.2,-34.7,66.5,69.5);


(lib.G = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Слой_1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["#1A6DFF","#C822FF"],[0,1],0,30.7,0,-30.6).s().p("AjIDbQhZhZAAiTQgCh1BRhUQBRhVB0gCIANAAQBAgDA9AWQAvARAxgCQAIAAAEAFQAFAFAAAHIAAC7QAAAHgFAFQgFAFgHAAQgGAAgEgDQgEgEgCgFQgLgmgbgjQg0hEhRAAQhSAAgjBdQgRAvgBAvQAAA4AaBDQAnBiBGAAQAMABAJgJQAOgSgBgZIAAgHQAAgbgCgOQgEgZgNgNQgWgTgbACQgGAAgFgEQgFgFAAgIQAAgGAFgGQAGgFAFAAIERAAQAGAAAFAFQAFAFABAHQAAAGgEAFQgDAEgFACQgcAIgGAcQgGAWAABOIAAASQAAAHgDADQgpA3g5AWQgqAPg8AAQiTAAhYhYgAiyjKQhKBHgDBnIAAALQAACGBPBOQBOBOCFAAQA7AAAogRQAngSAfgnIAAgMQAAg7ACgWQADgjAMgTIiNAAQAPATAFAeQACAQAAAfIAAAGQABAmgXAcQgTAUgbgBQhZAAgwhwQgghMAAhDQAAhHAgg/QAuhXBbAAQA0AAAuAaQAtAaAbAsIAAhgQgugCgrgPQg5gTg6ACIgFAAQhkAAhJBFg");
	this.shape.setTransform(0.0213,0.037);

	this.instance = new lib.Ganim();

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f().s("#000000").ss(1,1,1).p("AAJHNQh4gMhWhTQhXhUgLh8QgGhFAThDQAJghAfgTQhkhjhxhNIgCgFQBYhsCSgEQBMgDA/gpQAzghAYg3IAOgFQAxA8A5AwQAIAHAMAEQB5AfB3AsQArAPAsATQgCBHhPAKQgtAIgkAWQgcAQgPAiQg2B8BKBxQAHAKAIAKQgxAxgIBJQgHA9gvAmQhJA8hfgGg");
	this.shape_1.setTransform(0.425,-15.3519);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#0033FF").s().p("AAJHNQh4gMhWhTQhXhUgLh8QgGhFAThDQAJghAfgTQhkhjhxhNIgCgFQBYhsCSgEQBMgDA/gpQAzghAYg3IAOgFQAxA8A5AwQAIAHAMAEQB5AfB3AsQArAPAsATQgCBHhPAKQgtAIgkAWQgcAQgPAiQg2B8BKBxIAPAUQgxAxgIBJQgHA9gvAmQhDA2hVAAIgQAAg");
	this.shape_2.setTransform(0.425,-15.3519);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape}]}).to({state:[{t:this.instance}]},1).to({state:[{t:this.shape_2},{t:this.shape_1}]},2).wait(1));

	this._renderFirstFrame();

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-46.3,-62.5,93.5,94.3);


// stage content:
(lib.ВОССТАНОВИТЬ_GenshinLogo = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// K
	this.instance = new lib.Korona("synched",0);
	this.instance.setTransform(32.35,15,0.65,0.65,0,0,0,0.1,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({regY:0.2,y:13.95},29).to({regY:0.1,y:15},29).wait(1));

	// G
	this.instance_1 = new lib.G();
	this.instance_1.setTransform(32.35,44.3,0.65,0.65,0,0,0,0.1,0.1);
	new cjs.ButtonHelper(this.instance_1, 0, 1, 2, false, new lib.G(), 3);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(59));

	this._renderFirstFrame();

}).prototype = p = new lib.AnMovieClip();
p.nominalBounds = new cjs.Rectangle(34.9,35.8,27.800000000000004,28.799999999999997);
// library properties:
lib.properties = {
	id: 'D950BFFC6E750744BE380DCA5BA26EDC',
	width: 65,
	height: 65,
	fps: 30,
	color: "#FFFFFF",
	opacity: 0.00,
	manifest: [],
	preloads: []
};



// bootstrap callback support:

(lib.Stage = function(canvas) {
	createjs.Stage.call(this, canvas);
}).prototype = p = new createjs.Stage();

p.setAutoPlay = function(autoPlay) {
	this.tickEnabled = autoPlay;
}
p.play = function() { this.tickEnabled = true; this.getChildAt(0).gotoAndPlay(this.getTimelinePosition()) }
p.stop = function(ms) { if(ms) this.seek(ms); this.tickEnabled = false; }
p.seek = function(ms) { this.tickEnabled = true; this.getChildAt(0).gotoAndStop(lib.properties.fps * ms / 1000); }
p.getDuration = function() { return this.getChildAt(0).totalFrames / lib.properties.fps * 1000; }

p.getTimelinePosition = function() { return this.getChildAt(0).currentFrame / lib.properties.fps * 1000; }

an.bootcompsLoaded = an.bootcompsLoaded || [];
if(!an.bootstrapListeners) {
	an.bootstrapListeners=[];
}

an.bootstrapCallback=function(fnCallback) {
	an.bootstrapListeners.push(fnCallback);
	if(an.bootcompsLoaded.length > 0) {
		for(var i=0; i<an.bootcompsLoaded.length; ++i) {
			fnCallback(an.bootcompsLoaded[i]);
		}
	}
};

an.compositions = an.compositions || {};
an.compositions['D950BFFC6E750744BE380DCA5BA26EDC'] = {
	getStage: function() { return exportRoot.stage; },
	getLibrary: function() { return lib; },
	getSpriteSheet: function() { return ss; },
	getImages: function() { return img; }
};

an.compositionLoaded = function(id) {
	an.bootcompsLoaded.push(id);
	for(var j=0; j<an.bootstrapListeners.length; j++) {
		an.bootstrapListeners[j](id);
	}
}

an.getComposition = function(id) {
	return an.compositions[id];
}


an.makeResponsive = function(isResp, respDim, isScale, scaleType, domContainers) {		
	var lastW, lastH, lastS=1;		
	window.addEventListener('resize', resizeCanvas);		
	resizeCanvas();		
	function resizeCanvas() {			
		var w = lib.properties.width, h = lib.properties.height;			
		var iw = window.innerWidth, ih=window.innerHeight;			
		var pRatio = window.devicePixelRatio || 1, xRatio=iw/w, yRatio=ih/h, sRatio=1;			
		if(isResp) {                
			if((respDim=='width'&&lastW==iw) || (respDim=='height'&&lastH==ih)) {                    
				sRatio = lastS;                
			}				
			else if(!isScale) {					
				if(iw<w || ih<h)						
					sRatio = Math.min(xRatio, yRatio);				
			}				
			else if(scaleType==1) {					
				sRatio = Math.min(xRatio, yRatio);				
			}				
			else if(scaleType==2) {					
				sRatio = Math.max(xRatio, yRatio);				
			}			
		}
		domContainers[0].width = w * pRatio * sRatio;			
		domContainers[0].height = h * pRatio * sRatio;
		domContainers.forEach(function(container) {				
			container.style.width = w * sRatio + 'px';				
			container.style.height = h * sRatio + 'px';			
		});
		stage.scaleX = pRatio*sRatio;			
		stage.scaleY = pRatio*sRatio;
		lastW = iw; lastH = ih; lastS = sRatio;            
		stage.tickOnUpdate = false;            
		stage.update();            
		stage.tickOnUpdate = true;		
	}
}
an.handleSoundStreamOnTick = function(event) {
	if(!event.paused){
		var stageChild = stage.getChildAt(0);
		if(!stageChild.paused || stageChild.ignorePause){
			stageChild.syncStreamSounds();
		}
	}
}
an.handleFilterCache = function(event) {
	if(!event.paused){
		var target = event.target;
		if(target){
			if(target.filterCacheList){
				for(var index = 0; index < target.filterCacheList.length ; index++){
					var cacheInst = target.filterCacheList[index];
					if((cacheInst.startFrame <= target.currentFrame) && (target.currentFrame <= cacheInst.endFrame)){
						cacheInst.instance.cache(cacheInst.x, cacheInst.y, cacheInst.w, cacheInst.h);
					}
				}
			}
		}
	}
}


})(createjs = createjs||{}, AdobeAn = AdobeAn||{});
var createjs, AdobeAn;
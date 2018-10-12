/*************************************************************
 * This script is developed by Arturs Sosins aka ar2rsawseen, http://webcodingeasy.com
 * Feel free to distribute and modify code, but keep reference to its creator
 *
 * Image Selector class creates an image selector input with image preview based on select element. 
 * Images can be changed using select element itself or by clicking on image. 
 * Additionally this class provides API to select first, last, next or previous images or an image with specific index. 
 * It also can regenerate preview images for dynamical input manipulations.
 *
 * For more information, examples and online documentation visit: 
 * http://webcodingeasy.com/JS-classes/Input-for-selecting-images-with-preview
**************************************************************/
(function( $ ){
    $.fn.imageSelector = function(options, ind) {
        var conf = {
            width: 100,
            height: 100,
            changeOnClick: true,
            hideInput: false
        };
        
        //apply to each element
        return this.each(function() {
            var $this = $(this);
            var elem = this;
            var data = $this.data('data');
            if(!data)
            {
                data = {
                    input : document.createElement("div"),
                    opts: [],
                    cur: 0
                };
            }
            var empty = function(){
                var imgs = data.input.getElementsByTagName("img");
                var l = imgs.length;
                for(var i = 0; i < l; i++)
                {
                    data.input.removeChild(imgs[i]);
                }
            };
            var methods = {
                construct : function(){
                    
                    data.input.style.width = conf.width + "px";
                    data.input.style.height = conf.height + "px";
                    data.input.style.overflow = "hidden";
                    data.input.style.overflow = "hidden";
                    data.input.setAttribute("id", "image_selector_input");
                    
                    if(conf.hideInput)
                    {
                        this.style.display = "none";
                    }
                    else
                    {
                        $this.bind("change", function(){
                            methods.select(this.selectedIndex);
                        });
                    }
                    
                    this.reset();
                    var wrapper = document.createElement("div");
                    elem.parentNode.insertBefore(wrapper, elem);
                    wrapper.appendChild(data.input);
                    wrapper.appendChild(elem);
                    wrapper.setAttribute("id", "image_selector_wrapper");
                    if(conf.changeOnClick)
                    {
                        $(data.input).bind("click", function(){
                            data.cur++;
                            methods.select(data.cur);                    
                        });
                    }
                },
                next : function(){
                    methods.select(++data.cur);
                },
                prev : function(){
                    data.cur = (data.cur == 0) ? data.opts.length-1 : --data.cur;
                    methods.select(data.cur);
                },
                first : function(){
                    methods.select(0);
                },
                last : function(){
                    methods.select(data.opts.length-1);
                },
                select : function(index){
                    var l = data.opts.length;
                    index = index%l;
                    data.cur = index;
                    for(var i = 0; i < l; i++)
                    {
                        if(index != i)
                        {
                            data.opts[i].img.style.display = "none";
                        }
                        else
                        {
                            data.opts[i].img.style.display = "block";
                            data.opts[i].opt.selected = true;
                        }
                    }
                    $this.data('data', data);
                },
                reset : function(){
                    data.opts = [];
                    empty();
                    var options = elem.getElementsByTagName("option");
                    for(var j in options)
                    {
                        if(options[j] && options[j].nodeName && options[j].nodeName.toLowerCase() == "option")
                        {
                            var img = new Image();
                            img.setAttribute("alt", options[j].text);
                            img.setAttribute("width", conf.width + "px");
                            img.setAttribute("height", conf.height + "px");
                            img.style.padding = "none";
                            img.style.margin = "none";
                            var obj = new Object();
                            obj.img = img;
                            obj.opt = options[j];
                            data.opts.push(obj);
                            data.input.appendChild(img);
                            if(options[j].selected)
                            {
                                data.cur = j;
                                methods.select(data.cur);    
                            }
                            img.src = options[j].value;
                        }
                    }
                    $this.data('data', data);
                }
            };
            
            if ( typeof options === 'object' || ! options ) {
                //copy settings
                if ( options ) { 
                    $.extend( conf, options );
                }
                methods.construct();
            } else if (methods[options]){
                methods[options](ind);
            } else {
                $.error( 'Method ' +  options + ' does not exist' );
            }    
        });
    };
})( jQuery );
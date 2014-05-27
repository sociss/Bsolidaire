/**
 * Bsolidaire
 * =============================================================================
 * Framwork Bsolidaire
 * 
 * @author      Cyril Guignat, Lionel Hann, Remy Jerome, Enzo Amaro, Jean-Baptiste Muraro
 * @copyright   bsolidaire.fr
 * @license     Creative Commons - Paternité 2.0 France - http://creativecommons.org/licenses/by/2.0/fr/
 * @version     1.0
 * @date        11/05/2014
 * @compatible	au 11 mai 2014, compatibilité assurée pour :
 *				Firefox 1.5+, Internet Explorer 5.5+, Opéra 10, Safari 3.2.3. 
 *				Autres versions et navigateurs non testés
 */

/* Modernizr 2.8.1 (Custom Build) | MIT & BSD
 * Modernizr personnalisé => Detection : backgroundsize, hsla ,opacity ,rgba, cssanimations, csstransitions, draganddrop, inputattribute, inputtypes, geolocation, svg, html5shiv  et [testprop-testallprops-hasevent-prefixes-domprefixes-load]
 */
;window.Modernizr=function(a,b,c){function B(a){i.cssText=a}function C(a,b){return B(m.join(a+";")+(b||""))}function D(a,b){return typeof a===b}function E(a,b){return!!~(""+a).indexOf(b)}function F(a,b){for(var d in a){var e=a[d];if(!E(e,"-")&&i[e]!==c)return b=="pfx"?e:!0}return!1}function G(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:D(f,"function")?f.bind(d||b):f}return!1}function H(a,b,c){var d=a.charAt(0).toUpperCase()+a.slice(1),e=(a+" "+o.join(d+" ")+d).split(" ");return D(b,"string")||D(b,"undefined")?F(e,b):(e=(a+" "+p.join(d+" ")+d).split(" "),G(e,b,c))}function I(){e.input=function(c){for(var d=0,e=c.length;d<e;d++)t[c[d]]=c[d]in j;return t.list&&(t.list=!!b.createElement("datalist")&&!!a.HTMLDataListElement),t}("autocomplete autofocus list placeholder max min multiple pattern required step".split(" ")),e.inputtypes=function(a){for(var d=0,e,g,h,i=a.length;d<i;d++)j.setAttribute("type",g=a[d]),e=j.type!=="text",e&&(j.value=k,j.style.cssText="position:absolute;visibility:hidden;",/^range$/.test(g)&&j.style.WebkitAppearance!==c?(f.appendChild(j),h=b.defaultView,e=h.getComputedStyle&&h.getComputedStyle(j,null).WebkitAppearance!=="textfield"&&j.offsetHeight!==0,f.removeChild(j)):/^(search|tel)$/.test(g)||(/^(url|email)$/.test(g)?e=j.checkValidity&&j.checkValidity()===!1:e=j.value!=k)),s[a[d]]=!!e;return s}("search tel url email datetime date month week time datetime-local number range color".split(" "))}var d="2.8.0",e={},f=b.documentElement,g="modernizr",h=b.createElement(g),i=h.style,j=b.createElement("input"),k=":)",l={}.toString,m=" -webkit- -moz- -o- -ms- ".split(" "),n="Webkit Moz O ms",o=n.split(" "),p=n.toLowerCase().split(" "),q={svg:"http://www.w3.org/2000/svg"},r={},s={},t={},u=[],v=u.slice,w,x=function(a,c,d,e){var h,i,j,k,l=b.createElement("div"),m=b.body,n=m||b.createElement("body");if(parseInt(d,10))while(d--)j=b.createElement("div"),j.id=e?e[d]:g+(d+1),l.appendChild(j);return h=["&#173;",'<style id="s',g,'">',a,"</style>"].join(""),l.id=g,(m?l:n).innerHTML+=h,n.appendChild(l),m||(n.style.background="",n.style.overflow="hidden",k=f.style.overflow,f.style.overflow="hidden",f.appendChild(n)),i=c(l,a),m?l.parentNode.removeChild(l):(n.parentNode.removeChild(n),f.style.overflow=k),!!i},y=function(){function d(d,e){e=e||b.createElement(a[d]||"div"),d="on"+d;var f=d in e;return f||(e.setAttribute||(e=b.createElement("div")),e.setAttribute&&e.removeAttribute&&(e.setAttribute(d,""),f=D(e[d],"function"),D(e[d],"undefined")||(e[d]=c),e.removeAttribute(d))),e=null,f}var a={select:"input",change:"input",submit:"form",reset:"form",error:"img",load:"img",abort:"img"};return d}(),z={}.hasOwnProperty,A;!D(z,"undefined")&&!D(z.call,"undefined")?A=function(a,b){return z.call(a,b)}:A=function(a,b){return b in a&&D(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=v.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(v.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(v.call(arguments)))};return e}),r.geolocation=function(){return"geolocation"in navigator},r.draganddrop=function(){var a=b.createElement("div");return"draggable"in a||"ondragstart"in a&&"ondrop"in a},r.rgba=function(){return B("background-color:rgba(150,255,150,.5)"),E(i.backgroundColor,"rgba")},r.hsla=function(){return B("background-color:hsla(120,40%,100%,.5)"),E(i.backgroundColor,"rgba")||E(i.backgroundColor,"hsla")},r.backgroundsize=function(){return H("backgroundSize")},r.opacity=function(){return C("opacity:.55"),/^0.55$/.test(i.opacity)},r.cssanimations=function(){return H("animationName")},r.csstransitions=function(){return H("transition")},r.svg=function(){return!!b.createElementNS&&!!b.createElementNS(q.svg,"svg").createSVGRect};for(var J in r)A(r,J)&&(w=J.toLowerCase(),e[w]=r[J](),u.push((e[w]?"":"no-")+w));return e.input||I(),e.addTest=function(a,b){if(typeof a=="object")for(var d in a)A(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof enableClasses!="undefined"&&enableClasses&&(f.className+=" "+(b?"":"no-")+a),e[a]=b}return e},B(""),h=j=null,function(a,b){function l(a,b){var c=a.createElement("p"),d=a.getElementsByTagName("head")[0]||a.documentElement;return c.innerHTML="x<style>"+b+"</style>",d.insertBefore(c.lastChild,d.firstChild)}function m(){var a=s.elements;return typeof a=="string"?a.split(" "):a}function n(a){var b=j[a[h]];return b||(b={},i++,a[h]=i,j[i]=b),b}function o(a,c,d){c||(c=b);if(k)return c.createElement(a);d||(d=n(c));var g;return d.cache[a]?g=d.cache[a].cloneNode():f.test(a)?g=(d.cache[a]=d.createElem(a)).cloneNode():g=d.createElem(a),g.canHaveChildren&&!e.test(a)&&!g.tagUrn?d.frag.appendChild(g):g}function p(a,c){a||(a=b);if(k)return a.createDocumentFragment();c=c||n(a);var d=c.frag.cloneNode(),e=0,f=m(),g=f.length;for(;e<g;e++)d.createElement(f[e]);return d}function q(a,b){b.cache||(b.cache={},b.createElem=a.createElement,b.createFrag=a.createDocumentFragment,b.frag=b.createFrag()),a.createElement=function(c){return s.shivMethods?o(c,a,b):b.createElem(c)},a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+m().join().replace(/[\w\-]+/g,function(a){return b.createElem(a),b.frag.createElement(a),'c("'+a+'")'})+");return n}")(s,b.frag)}function r(a){a||(a=b);var c=n(a);return s.shivCSS&&!g&&!c.hasCSS&&(c.hasCSS=!!l(a,"article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")),k||q(a,c),a}var c="3.7.0",d=a.html5||{},e=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,f=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,g,h="_html5shiv",i=0,j={},k;(function(){try{var a=b.createElement("a");a.innerHTML="<xyz></xyz>",g="hidden"in a,k=a.childNodes.length==1||function(){b.createElement("a");var a=b.createDocumentFragment();return typeof a.cloneNode=="undefined"||typeof a.createDocumentFragment=="undefined"||typeof a.createElement=="undefined"}()}catch(c){g=!0,k=!0}})();var s={elements:d.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",version:c,shivCSS:d.shivCSS!==!1,supportsUnknownElements:k,shivMethods:d.shivMethods!==!1,type:"default",shivDocument:r,createElement:o,createDocumentFragment:p};a.html5=s,r(b)}(this,b),e._version=d,e._prefixes=m,e._domPrefixes=p,e._cssomPrefixes=o,e.hasEvent=y,e.testProp=function(a){return F([a])},e.testAllProps=H,e.testStyles=x,e}(this,this.document);

"use strict";
/**
* Polyfills
* ==================================================================================
*/
//Polyfills
if(!String.prototype.trim){
  String.prototype.trim = function (){
        return this.replace(/^\s+|\s+$/g,'');
  };
};
if(!Array.isArray) {
  Array.isArray = function(arg) {
        return Object.prototype.toString.call(arg) === '[object Array]';
  };
};
if (!Array.prototype.forEach){
  Array.prototype.forEach = function(fun /*, thisArg */){
        if (this === void 0 || this === null)
          throw new TypeError();

        var t = Object(this);
        var len = t.length >>> 0;
        if (typeof fun !== "function")
          throw new TypeError();

        var thisArg = arguments.length >= 2 ? arguments[1] : void 0;
        for (var i = 0; i < len; i++)
        {
          if (i in t)
                fun.call(thisArg, t[i], i, t);
        }
  };
};
/**
* Bsolidaire
* ==================================================================================
*/
var Bsolidaire={
        /**
         * id
         * =============================================================================
         * Renvoie l'élément dont l'ID est celui spécifié en paramétre.
         *
         * @param       elem       {string}     est une chaîne représentant l'identifant unique de l'élément voulu.
         * @return      element    {object}     est un objet de type element.
         *
        */
        id:function(elem){
                return document.getElementById(elem);
        },
        /**
         * byClass
         * =============================================================================
         * Renvoie le ou les élements dont la classe est celle spécifiée en paramétre.
         *
         * @param       name       {string}     est une chaîne représentant la classe voulue.
         * @param       parent     {object}     [optionel par defaut document] est un objet de type element.
         * @param       type       {string}     [optionel par defaut *]est une chaîne représentant le type de balise voulue.
         * @return      temp       {array}      est un tableau contenant le ou les élements possédant la classe passée en paramétre.
         *
        */
        byClass:function(name,parent,type){
                var i=0, temp=[],
                pattern = new RegExp("(^| )" + name + "( |$)"),e=(parent || document).getElementsByTagName(type || '*'),el=e.length;
                for(i;i<el;i++){
                        (pattern.test(e[i].className))?temp.push(e[i]):'';
                }
                return temp;

        },
        /**
         * byName
         * =============================================================================
         * Renvoie le ou les élements dont le nom du noeud est celui spécifié en paramétre.
         *
         * @param       name       {string}     est une chaîne représentant le nom du noeud voulu.
         * @param       parent     {object}     [optionel par defaut document] est un objet de type element.
         * @return      temp       {array}      est un tableau contenant le ou les élements possédant le nom du noeud passé en paramétre.
         *
        */
        byName:function(name,parent){
                var i=0,temp=[],
                p= parent || document,
                e = p.getElementsByTagName(name),el=e.length;
                for(i;i<el;i++){
                        temp.push(e[i]);
                }
                (temp.length===1)?temp=temp[0]:'';
                return temp;
        },
        /**
         * addEvent
         * =============================================================================
         * Ajoute un écouteur d'évenement à l'élement passé en paramétre.
         * La fonction est auto-exécutée, elle renvoie une fonction anonyme contenant les codes spécifiques au navigateur.
         *
         * @param       event      {string}     est une chaîne représentant le type d'évènement à enregistrer.
         * @param       fonction   {function}   code que l'on souhaite éxecuté au déclenchement de l'évenement.
         * @param       etat       {bool}       si true, tous les évènements du type spécifié seront dispatchés vers l'EventListener 
                                                                                        avant d'être envoyés à toute cible (EventTarget) plus bas dans l'arbre.
                                                                                        cf : http://www.w3.org/TR/DOM-Level-3-Events/#event-flow
         * @param       elem       {object}     élément sur lequel on souhaite attaché l'écouteur.
         * @return      this       {object}     réference à l'objet Bsolidaire.
         *
        */
        addEvent:function(){
                if(document.body.addEventListener){
                        return function(event,fonction,etat,elem){
                                elem.addEventListener(event,fonction,etat);
                                return this;
                        };
                }else{
                        return function(event,fonction,etat,elem){
                                elem.attachEvent('on'+event,fonction,etat);
                                return this;
                        };
                }
        }(),
        /**
         * supEvent
         * =============================================================================
         * Supprime un écouteur d'évenement à l'élement passé en paramétre.
         * La fonction est auto-exécutée, elle renvoie une fonction anonyme contenant les codes spécifiques au navigateur.
         *
         * @param       event      {string}     est une chaîne représentant le type d'évènement à supprimer-.
         * @param       fonction   {function}   fonction attachée à l'évenement à supprimer.
         * @param       etat       {bool}       cf : http://www.w3.org/TR/DOM-Level-3-Events/#event-flow
         * @param       elem       {object}     élément sur lequel on souhaite supprimer l'écouteur.
         * @return      this       {object}     réference à l'objet Bsolidaire.
         *
        */
        supEvent:function(){
                if(document.body.removeEventListener){
                        return function(event,fonction,etat,elem){
                                elem.removeEventListener(event,fonction,etat);
                                return this;
                        };
                }else{
                        return function(event,fonction,etat,elem){
                                elem.detachEvent('on'+event,fonction,etat);
                                return this;
                        };
                }
        }(),
        /**
         * setOpa
         * =============================================================================
         * Applique une opacité de valeur value à l'élement passé en paramétre.
         * La fonction est auto-exécutée, elle renvoie une fonction anonyme contenant les codes spécifiques au navigateur.
         *
         * @param       elem    {object}   element auquel on souhaite appliquer l'opacité.
         * @param       value   {double}   valeur de l'opacité, compris entre 0 et 1.
         * @return      void       
         *
        */
        setOpa:function(){
                if(Modernizr.opacity){
                        return function(elem,value){
                                value=(value>1)?1:(value<0)?0:value;
                                elem.style.opacity = value;};
                }else{return function(elem,value){
                        value=(value>1)?1:(value<0)?0:value;
                        elem.style.MozOpacity = value;
                        elem.style.KhtmlOpacity = value;
                        elem.style.filter = 'alpha(opacity=' + value*100 + ')';};}
        }(),
        /**
         * transfer
         * =============================================================================
         * retourne un objet contenant les propriétés et méthodes de l'objet /dest/,
         * complétées et/ou écrasées par celles de l'objet /source/
         *
         * @param       source       {object}        l'objet source
         * @param       dest         {object}        l'objet de destination
         * @return      transfert    {object}        Nouvelle objet {object}source + {object} dest
         *
         */
        transfer : function(source, dest){
                var prop, transfert={};
                for(prop in dest){transfert[prop] = dest[prop];};
                for(prop in source){transfert[prop] = source[prop];};
                return transfert; 
        },
        /**
         * pageDim
         * =============================================================================
         * Calcul la taille de la page.
         *
         * @return      value   {object}   contient la largeur : w et la hauteur : h de la page web.    
         *
        */
        pageDim:function(){
                var d = document,dE = d.documentElement,dB = d.body,w,h;		
                h = dE.scrollHeight;
                w = dE.scrollWidth;
                (dE.clientHeight>h)?h= dE.clientHeight:'';
                (dE.clientWidth>w)?w= dE.clientWidth:'';
                (dB.scrollHeight>h)?h= dB.scrollHeight:''; 
                (dB.scrollWidth>w)?w= dB.scrollWidth:''; 
                return {'w':w, 'h':h} ;
        },
        /**
         * winDim
         * =============================================================================
         * Calcul la taille de la fenêtre.
         * La fonction est auto-exécutée, elle renvoie une fonction anonyme contenant les codes spécifiques au navigateur.
         *
         * @return      value   {object}   contient la largeur : w et la hauteur : h de la fenêtre.    
         *
        */
        winDim:function(){
                if(window.innerWidth ){
                        return function(){
                                var W = window.innerWidth,H = window.innerHeight;
                                return {w:W, h:H} ;
                        }
                }else if(document.documentElement.clientWidth){
                        return function(){
                                return {w:document.documentElement.clientWidth, h:document.documentElement.clientHeight} ;
                        }
                }
                else{
                        return function(){
                                return {w:document.body.clientWidth, h:document.body.clientHeight} ;
                        }
                }	
        }(),
        /**
         * getPos
         * =============================================================================
         * Retourne la position de chacun des côtés de l'élément /elem/ dans la page,
         *
         * @param       elem    {Object}   L'élément dont on souhaite connaitre la position.
         * @returns     pos     {Object}   Objet contenant les clés t(top)|b(bottom)|l(left)|r(right)         
        */
        getPos : function(elem){
                var pos={'r':0,'l':0,'t':0,'b':0},
                tmp=elem;
                do{
                        pos.l += tmp.offsetLeft;
                        tmp = tmp.offsetParent;
                }while( tmp !== null );
                pos.r = pos.l + elem.offsetWidth;
                tmp=elem;
                do{
                        pos.t += tmp.offsetTop;
                        tmp = tmp.offsetParent;
                }while( tmp !== null );
                pos.b = pos.t + elem.offsetHeight;
                return pos;
        },
        /**
         * extract_val
         * =============================================================================
         * Retourne la valeur nettoyée de l'unité.
         *
         * @param       string    {string}   Chaine de caractére que l'on souhaite nettoyer
         * @returns     result    {Number}   Chaine nettoyée de son unité          
        */
        extract_val : function(string){
                var result = parseFloat(string);
                if(isNaN(result)){
                        alert('Une erreur c\'est produite, la valeur de fin n\'est pas un chiffre. \nLa valeur par default 0, est pris en compte');
                        return 0;}
                else{return result;};
        },
        /**
         * extract_unit
         * =============================================================================
         * Sépare valeur et unité de chaine string qui lui ai passée.
         *
         * @param       string    {string}    Chaine de caractére que l'on souhaite séparer
         * @returns     value     {object}   Objet contenant les clés val(valeur)|unit(unité)          
        */
        extract_unit : function(string){
                if(!string || string==''){
                        alert('Aucune valeur trouvée, la valeur par défault 0px est prise en compte');
                        return {val:0,unit:'px'};
                };
                var value={};
                value.val = this.extract_string(string);
                value.unit = (string.replace)?string.replace(value.t,''):'px';
                return value;
        },
        /**
         * extract_color
         * =============================================================================
         * Retourne chaqe composant de la couleur quelle que soit le systéme colorimétrique (rgb,rgba,hsl,hsla, héxadécimal)
         *
         * @param       valeur    {string}    Chaine de caractére répresentant une couleur
         * @returns     color     {object}    Objet contenant les clés val(valeur)|unit(unité)          
        */
        extract_color : function(valeur){
                var color = {};
                color.startval = valeur;
                color.erreur = false;
                modele=(valeur.indexOf('rgb') >=0)?'rgb':(valeur.indexOf('rgba') >=0)?'rgba':(valeur.indexOf('#') >=0)?'hexa':(valeur.indexOf('hsla') >=0)?'hsla':(valeur.indexOf('hsl') >=0)?'hsl':(!isNaN(parseInt(valeur,10)))?'custom':'default';

                switch(modele){
                        case 'rgba' :
                                valeur = valeur.replace('rgba(','');
                                valeur = valeur.replace(')','');
                                valeur = valeur.split(',');
                                color.unit = 'rgba';
                                // Si plus de 3 valeurs, on prend en compte les 3 premiéres, sinon les autres servent de réferences pour celles qui manquent. Alpha est par default mis à 1.
                                color.r = (valeur[0].search('%')>=0)?Math.round((parseInt(valeur[0])/100)*255):parseInt(valeur[0]);
                                color.g = (valeur[1])?(valeur[1].search('%')>=0)?Math.round((parseInt(valeur[1])/100)*255):parseInt(valeur[1]):color.r;
                                color.b = (valeur[2])?(valeur[2].search('%')>=0)?Math.round((parseInt(valeur[2])/100)*255):parseInt(valeur[2]):color.g;
                                if(valeur[3]>=0 && valeur[3]<=1 && !isNaN(valeur[3])){color.alpha = parseFloat(valeur[3])}else{color.alpha = 1;color.mess = 'Votre alpha n\'est pas correcte. \nIl doit être compris entre 1 et 0. \nPar default le programme prends pour la valeur alpha : 1';}
                                (!valeur[1] || !valeur[2])?color.mess += ' \nVotre valeur rgba ne contient pas le nombre de paramétre exacte. \nLe programme applique par default la dernière valeur trouvée.':'';
                                //On verifie le format => Chiffre.
                                (isNaN(color.r) || isNaN(color.g) || isNaN(color.b))?color.erreur = 'Merci de rentrer une valeur rgba au bon format.\n\nLa valeur que vous avez rentrer : '+color.startval+'  \nLe format correcte est : rgba(valeur1,valeur2,valeur3, alpha) \n! N\'oubliez pas les paranthése. \n\n':color.erreur = false;
                                // On verifie les valeurs
                                (color.erreur == false)?(color.r <0 || color.r>255 || color.g <0 || color.g>255 || color.b <0 || color.b>255)?color.erreur = 'Merci de rentrer des valeurs compris en 0 et 255. \nVotre valeur actuel : '+color.startval:'':false; 
                                break;
                        case 'rgb':
                                valeur = valeur.replace('rgb(','');
                                valeur = valeur.replace(')','');
                                valeur = valeur.split(',');
                                color.unit = 'rgb';
                                // Si plus de 3 valeurs, on prend en compte les 3 premiéres, sinon les la derniére sert de réference pour celle qui manque. Alpha est par default mis à 1.
                                color.r = (valeur[0].search('%')>=0)?Math.round((parseInt(valeur[0])/100)*255):parseInt(valeur[0]);
                                color.g = (valeur[1])?(valeur[1].search('%')>=0)?Math.round((parseInt(valeur[1])/100)*255):parseInt(valeur[1]):color.r;
                                color.b = (valeur[2])?(valeur[2].search('%')>=0)?Math.round((parseInt(valeur[2])/100)*255):parseInt(valeur[2]):color.g;
                                (!valeur[1] || !valeur[2])?color.mess = 'Votre valeur rgb ne contient pas le nombre de paramétre exacte. \nLe programme applique par default le dernier paramétre trouvé.':'';
                                (isNaN(color.r) || isNaN(color.g) || isNaN(color.b))?color.erreur = 'Merci de rentrer une valeur rgb au bon format.\n\nLa valeur que vous avez rentrer : '+color.startval+'  \nLe format correcte est : rgb(valeur1,valeur2,valeur3) \n! N\'oubliez pas les paranthése. \n\n':false;
                                // On verifie les valeurs
                                (color.erreur == false)?(color.r <0 || color.r>255 || color.g <0 || color.g>255 || color.b <0 || color.b>255)?color.erreur = 'Merci de rentrer des valeurs compris en 0 et 255. \nVotre valeur actuel : '+color.startval:'':false; 
                                break;
                        case 'hexa':
                                valeur = valeur.replace('#','');
                                if(valeur.length >= 6){
                                        color.unit = 'rgb'
                                        if(valeur.length>6){
                                                color.alpha = parseInt(valeur.substr(6,2),16);
                                                (!isNaN(color.alpha) && color.alpha>=0 && color.alpha <=1)?color.unit = 'rgba':color.mess = 'Votre valeur pour l\'alpha n\'est pas bonne. Par défault elle est mis à un. \nVotre valeur : '+color.startval;
                                        }
                                        valeur = convert_coul(valeur.substr(0,5),'hexa','rgb');
                                        if(valeur.r <0 || valeur.r>255 || valeur.g <0 || valeur.g>255 || valeur.b <0 || valeur.b>255){
                                                color.erreur = 'Merci de rentrer des valeurs compris en #000000 et #FFFFFF. \nVotre valeur actuel : '+color.startval; 
                                        }
                                        else{
                                                color.r = valeur.r;
                                                color.g = valeur.g;
                                                color.b = valeur.b;
                                        }
                                }
                                else if(valeur.length === 3){
                                        var i, l = valeur.length,txt='';
                                        color.unit = 'rgb'
                                        for(i=0;i<l;i++){
                                                txt += valeur.charAt(i)+valeur.charAt(i);
                                        }
                                        valeur = convert_coul(txt,'hexa','rgb');
                                        if(valeur.r <0 || valeur.r>255 || valeur.g <0 || valeur.g>255 || valeur.b <0 || valeur.b>255){
                                                color.erreur = 'Merci de rentrer des valeurs compris en #000000 et #FFFFFF. \nVotre valeur actuel : '+color.startval; 
                                        }
                                        else{
                                                color.r = valeur.r;
                                                color.g = valeur.g;
                                                color.b = valeur.b;
                                        }
                                }
                                else{
                                        color.unit = 'rgb'
                                        color.mess = 'Votre couleur héxadécimal : '+color.startval+' n\'est pas dans le bon format. \nSoit 8 caractéres : #ffffff+alpha. \nSoit 6 caractéres : #ffffff. \nSoit 3 caractéres : #fff \nPar défault la valeur rbg(255,255,255) est pris en compte.';
                                        color.r = color.g = color.b = 255;
                                }
                                break;
                                case 'hsla':
                                valeur = valeur.replace('hsla(','');
                                valeur = valeur.replace(')','');
                                valeur = valeur.split(',');
                                color.unit = 'hsla';
                                // Si plus de 3 valeurs, on prend en compte les 3 premiéres, sinon les la derniére sert de réference pour celle qui manque. Alpha est par default mis à 1.
                                color.r = (valeur[0].search('%')>=0)?Math.round((parseInt(valeur[0])/100)*360):parseInt(valeur[0]);
                                color.g = (valeur[1])?parseInt(valeur[1]):100;
                                color.b = (valeur[2])?parseInt(valeur[2]):color.g;
                                if(valeur[3]>=0 && valeur[3]<=1 && !isNaN(valeur[3])){color.alpha = parseFloat(valeur[3])}else{color.alpha = 1;color.mess = 'Votre alpha n\'est pas correcte. \nIl doit être compris entre 1 et 0. \nPar default le programme prends pour la valeur alpha : 1';}
                                (!valeur[1] || !valeur[2])?color.mess += '\nVotre valeur hsla ne contient pas le nombre de paramétre exacte. \nLe programme applique par default 100% aux valeurs manquantes':'';
                                (isNaN(color.r) || isNaN(color.g) || isNaN(color.b))?color.erreur = 'Merci de rentrer une valeur hsla au bon format.\n\nLa valeur que vous avez rentrer : '+color.startval+'  \nLe format correcte est : hsla(valeur1,valeur2,valeur3, alpha) \n! N\'oubliez pas les paranthése. \n\n':color.erreur = false;
                                // On verifie les valeurs
                                (color.erreur == false)?(color.g <0 || color.g >100 || color.b <0 || color.b >100)?color.erreur = 'Merci de rentrer des valeurs compris en 0 et 100. \nVotre valeur actuel : '+color.startval:'':false; 
                                break;
                        case 'hsl':
                                valeur = valeur.replace('hsl(','');
                                valeur = valeur.replace(')','');
                                valeur = valeur.split(',');
                                color.unit = 'hsl';
                                // Si plus de 3 valeurs, on prend en compte les 3 premiéres, sinon les la derniére sert de réference pour celle qui manque. Alpha est par default mis à 1.
                                color.r = (valeur[0].search('%')>=0)?Math.round((parseInt(valeur[0])/100)*360):parseInt(valeur[0]);
                                color.g = (valeur[1])?parseInt(valeur[1]):100;
                                color.b = (valeur[2])?parseInt(valeur[2]):color.g;
                                (!valeur[1] || !valeur[2])?color.mess = 'Votre valeur hsl ne contient pas le nombre de paramétre exacte. \nLe programme applique par default le dernier paramétre trouvé.':'';
                                (isNaN(color.r) || isNaN(color.g) || isNaN(color.b))?color.erreur = 'Merci de rentrer une valeur hsl au bon format.\n\nLa valeur que vous avez rentrer : '+color.startval+'  \nLe format correcte est : hsl(valeur1,valeur2,valeur3) \n! N\'oubliez pas les paranthése. \n\n':color.erreur = false;
                                // On verifie les valeurs
                                (color.erreur == false)?(color.g <0 || color.g >100 || color.b <0 || color.b >100 )?color.erreur = 'Merci de rentrer des valeurs compris en 0 et 100. \nVotre valeur actuel : '+color.startval:'':false; 
                                break;
                        case 'custom':
                                // On applique rgb ou rgba par default.
                                valeur = valeur.split(',');
                                color.unit = (valeur.length >3)?'rgba' :'rgb';
                                color.r = (valeur[0].search('%')>=0)?Math.round((parseInt(valeur[0])/100)*255):parseInt(valeur[0]);
                                color.g = (valeur[1])?(valeur[1].search('%')>=0)?Math.round((parseInt(valeur[1])/100)*255):parseInt(valeur[1]):color.r;
                                color.b = (valeur[2])?(valeur[2].search('%')>=0)?Math.round((parseInt(valeur[2])/100)*255):parseInt(valeur[2]):color.g;
                                if(valeur[3]>=0 && valeur[3]<=1 && !isNaN(valeur[3])){color.alpha = parseFloat(valeur[3])}else if(color.unit === 'rgba'){color.alpha = 1;color.mess = 'Votre alpha n\'est pas correcte. \nIl doit être compris entre 1 et 0. \nPar default le programme prends pour la valeur alpha : 1';}
                                (!valeur[1] || !valeur[2])?color.mess += '\nVotre valeur rgba ne contient pas le nombre de paramétre exacte. \nLe programme applique par default le dernier paramétre trouvé.':'';
                                (isNaN(color.r) || isNaN(color.g) || isNaN(color.b))?color.erreur = 'Merci de rentrer une valeur au bon format.\n\nLa valeur que vous avez rentrer : '+color.startval+'  \nLe format correcte est : \nrgba(valeur1,valeur2,valeur3, alpha) \nrgb(valeur1,valeur2,valeur3) \nhsla(valeur1,valeur2,valeur3, alpha) \nhsl(valeur1,valeur2,valeur3, alpha) \n#FFFFFF+alpha ou #FFFFFF ou #FFF  \n! N\'oubliez pas les paranthése. \n\n':color.erreur = false;
                                // On verifie les valeurs
                                (color.erreur == false)?(color.r <0 && color.r>255 && color.g <0 && color.g>255 && color.b <0 && color.b>255)?color.erreur = 'Merci de rentrer des valeurs compris en 0 et 255':'':false; 
                                break;
                        default:
                                // On vérifie si elle correspond à nu nom de couleur prédéfinis.
                                color.result = this.couleur_x11(valeur);
                                if(color.result !== false){
                                        color.unit = 'rgb';
                                        color.result = color.result.split(',');
                                        color.r = color.result[0];
                                        color.g = color.result[1];
                                        color.b = color.result[2];

                                }
                                else{
                                        color.erreur = 'La valeur de fin indiqué ne semble pas correspondre à une couleur. Merci de verifier. \nVotre valeur : '+color.startval;
                                }
                                break;
                }
                return color;
        },
        /**
         * couleur_x11
         * =============================================================================
         * Liste de couleurs, établis sur la base de la spécification css3 
         * http://fr.wikipedia.org/wiki/Couleurs_du_Web et http://www.w3.org/TR/css3-color/
         *
         * @param       valeur    {string}    Chaine de caractére répresentant une couleur
         * @returns     color     {array} || {bool}    Array contenant la valeur rgb de la couleur (valeur) passée en paramétre
         *                                             False si la couleur ne correspond à aucune couleur listée dans le tableau
        */
        couleur_x11 : function(valeur){
                var colorNames = {
                        /* Couleurs rouges */
                        IndianRed:'205,92,92',
                        LightCoral:'240,128,128',
                        Salmon:'250,128,114',
                        DarkSalmon:'233,150,122',
                        LightSalmon:'255,160,122',
                        Crimson:'220,20,60',
                        Red:'255,0,0',
                        FireBrick:'178,34,34',
                        DarkRed:'139,0,0',
                        /* Couleurs roses */
                        Pink:'255,192,203',
                        LightPink:'255,182,193',
                        HotPink:'255,105,180',
                        DeepPink:'255,20,147',
                        MediumVioletRed:'199,21,133',
                        PaleVioletRed:'219,112,147',
                        /* Couleurs oranges */
                        LightSalmon:'255,160,122',
                        Coral:'255,127,80',
                        Tomato:'255,99,71',
                        OrangeRed:'255,69,0',
                        DarkOrange:'255,140,0',
                        Orange:'255,165,0',
                        /* Couleur jaune */
                        Gold:'255,215,0',
                        Yellow:'255,255,0',
                        LightYellow:'255,255,224',
                        LemonChiffon:'255,250,205',
                        LightGoldenrodYellow:'250,250,210',
                        PapayaWhip:'255,239,213',
                        Moccasin:'255,228,181',
                        PeachPuff:'255,218,185',
                        PaleGoldenrod:'238,232,170',
                        Khaki:'240,230,140',
                        DarkKhaki:'189,183,107',
                        /* Couleurs violettes */
                        Lavender:'230,230,250',
                        Thistle:'216,191,216',
                        Plum:'221,160,221',
                        Violet:'238,130,238',
                        Orchid:'218,112,214',
                        Fuchsia:'255,0,255',
                        Magenta:'255,0,255',
                        MediumOrchid:'186,85,211',
                        MediumPurple:'147,112,219',
                        BlueViolet:'138,43,226',
                        DarkViolet:'148,0,211',
                        DarkOrchid:'153,50,204',
                        DarkMagenta:'139,0,139',
                        Purple:'128,0,128',
                        Indigo:'75,0,130',
                        SlateBlue:'106,90,205',
                        DarkSlateBlue:'72,61,139',
                        MediumSlateBlue:'123,104,238',
                        /* Couleurs marrons */
                        Cornsilk:'255,248,220',
                        BlanchedAlmond:'255,235,205',
                        Bisque:'255,228,196',
                        NavajoWhite:'255,222,173',
                        Wheat:'245,222,179',
                        BurlyWood:'222,184,135',
                        Tan:'210,180,140',
                        RosyBrown:'188,143,143',
                        SandyBrown:'244,164,96',
                        Goldenrod:'218,165,32',
                        DarkGoldenrod:'184,134,11',
                        Peru:'205,133,63',
                        Chocolate:'210,105,30',
                        SaddleBrown:'139,69,19',
                        Sienna:'160,82,45',
                        Brown:'165,42,42',
                        Maroon:'128,0,0',
                        /* Couleurs vertes */
                        GreenYellow:'173,255,47',
                        Chartreuse:'127,255,0',
                        LawnGreen:'124,252,0',
                        Lime:'0,255,0',
                        LimeGreen:'50,205,50',
                        PaleGreen:'152,251,152',
                        LightGreen:'144,238,144',
                        MediumSpringGreen:'0,250,154',
                        SpringGreen:'0,255,127',
                        MediumSeaGreen:'60,179,113',
                        SeaGreen:'46,139,87',
                        ForestGreen:'34,139,34',
                        Green:'0,128,0',
                        DarkGreen:'0,100,0',
                        YellowGreen:'154,205,50',
                        OliveDrab:'107,142,35',
                        Olive:'128,128,0',
                        DarkOliveGreen:'85,107,47',
                        MediumAquamarine:'102,205,170',
                        DarkSeaGreen:'143,188,143',
                        LightSeaGreen:'32,178,170',
                        DarkCyan:'0,139,139',
                        Teal:'0,128,128',
                        /* Couleurs bleues */
                        Aqua:'0,255,255',
                        Cyan:'0,255,255',
                        LightCyan:'224,255,255',
                        PaleTurquoise:'175,238,238',
                        Aquamarine:'127,255,212',
                        Turquoise:'64,224,208',
                        MediumTurquoise:'72,209,204',
                        DarkTurquoise:'0,206,209',
                        CadetBlue:'95,158,160',
                        SteelBlue:'70,130,180',
                        LightSteelBlue:'176,196,222',
                        PowderBlue:'176,224,230',
                        LightBlue:'173,216,230',
                        SkyBlue:'135,206,235',
                        LightSkyBlue:'135,206,250',
                        DeepSkyBlue:'0,191,255',
                        DodgerBlue:'30,144,255',
                        CornflowerBlue:'100,149,237',
                        MediumSlateBlue:'123,104,238',
                        RoyalBlue:'65,105,225',
                        Blue:'0,0,255',
                        MediumBlue:'0,0,205',
                        DarkBlue:'0,0,139',
                        Navy:'0,0,128',
                        MidnightBlue:'25,25,112',
                        /*Couleurs marrons */
                        Cornsilk:'255,248,220',
                        BlanchedAlmond:'255,235,205',
                        Bisque:'255,228,196',
                        NavajoWhite:'255,222,173',
                        Wheat:'245,222,179',
                        BurlyWood:'222,184,135',
                        Tan:'210,180,140',
                        RosyBrown:'188,143,143',
                        SandyBrown:'244,164,96',
                        Goldenrod:'218,165,32',
                        DarkGoldenrod:'184,134,11',
                        Peru:'205,133,63',
                        Chocolate:'210,105,30',
                        SaddleBrown:'139,69,19',
                        Sienna:'160,82,45',
                        Brown:'165,42,42',
                        Maroon:'128,0,0',
                        /* Couleurs blanches */
                        White:'255,255,255',
                        Snow:'255,250,250',
                        Honeydew:'240,255,240',
                        MintCream:'245,255,250',
                        Azure:'240,255,255',
                        AliceBlue:'240,248,255',
                        GhostWhite:'248,248,255',
                        WhiteSmoke:'245,245,245',
                        Seashell:'255,245,238',
                        Beige:'245,245,220',
                        OldLace:'253,245,230',
                        FloralWhite:'255,250,240',
                        Ivory:'255,255,240',
                        AntiqueWhite:'250,235,215',
                        Linen:'250,240,230',
                        LavenderBlush:'255,240,245',
                        MistyRose:'255,228,225',
                        /* Couleurs grises */
                        Gainsboro:'220,220,220',
                        LightGrey:'211,211,211',
                        Silver:'192,192,192',
                        DarkGray:'169,169,169',
                        Gray:'128,128,128',
                        DimGray:'105,105,105',
                        LightSlateGray:'119,136,153',
                        SlateGray:'112,128,144',
                        DarkSlateGray:'47,79,79',
                        Black:'0,0,0'
                };
                for(var prop in colorNames){
                        if(valeur.toLowerCase() === prop.toLowerCase()){return colorNames[prop]};
                }
                return false;
        },
        /**
         * scrolled
         * =============================================================================
         * Permet de mesurer le défilement de la page : le scrolling
         * La fonction est auto-exécutée, elle renvoie une fonction anonyme contenant les codes spécifiques au navigateur.
         *
         * @return      value   {object}   	Les mesures sont données en pixels, par rapport au coin supérieur gauche de la page.
                                                                                contient le scrolled horizontale: x et vertical : y   
         *
        */
        scrolled:function(){
                if(window.pageXOffset!==undefined){
                        return function(){
                                return {x:window.pageXOffset,y:window.pageYOffset};
                        }
                }
                else {
                        return function(){
                                return {x:docuement.documentElement.scrollLeft?docuement.documentElement.scrollLeft:(document.body.scrollLeft?document.body.scrollLeft:0),y:docuement.documentElement.scrollTop ? docuement.documentElement.scrollTop:(document.body.scrollTop?document.body.scrollTop:0)} ;
                        }
                }
        }(),
        /**
         * bezier
         * =============================================================================
         * Permet de définir une courbe de bezier
         *
         * @param       t       {double}    step actuel
         * @param       x1      {double}   	Point 1
         * @param       y1      {double}    Point 2
         * @param       x2      {double}    Point 3
         * @param       y2      {double}    Point 4
         * @return      result  {double}    Résultat du calcul.
         *
        */
        bezier:function(t, x1, y1, x2, y2){
                var f0 = 1 - 3 * x2 + 3 * x1,
                f1 = 3 * x2 - 6 * x1,
                f2 = 3 * x1,
                refinedT = t,
                i;
                for(i = 0; i < 5; i++){
                        var refinedT2 = refinedT * refinedT,
                        refinedT3 = refinedT2 * refinedT,
                        x = f0 * refinedT3 + f1 * refinedT2 + f2 * refinedT,
                        slope = 1.0 / (3.0 * f0 * refinedT2 + 2.0 * f1 * refinedT + f2);
                        refinedT -= (x - t) * slope;
                        refinedT = Math.min(1, Math.max(0, refinedT));
                }
                return 3 * Math.pow(1 - refinedT, 2) * refinedT * y1 +3 * (1 - refinedT) * Math.pow(refinedT, 2) * y2 +Math.pow(refinedT, 3);
        },
        /**
         * ease
         * =============================================================================
         * Calcul des étapes d'animation douces
         *
         * @param       t       {double}    Pas de calcul
         * @param       x1      {double}   	Point 1
         * @return      result  {double}    Résultat du calcul.
         *
        */
        ease : function(effet,step, val){
                switch(effet){
                        case 'linear' : return this.bezier(step,0.250, 0.250, 0.750, 0.750);
                        case 'ease' : return this.bezier(step,0.250, 0.100, 0.250, 1.000);
                        case 'ease-in' : return this.bezier(step,0.420, 0.000, 1.000, 1.000);
                        case 'ease-out' : return this.bezier(step,0.000, 0.000, 0.580, 1.000);
                        case 'ease-in-out' : return this.bezier(step,0.420, 0.000, 0.580, 1.000);
                        case 'easeInQuad' : return this.bezier(step,0.550, 0.085, 0.680, 0.530);
                        case 'easeInCubic' : return this.bezier(step,0.550, 0.055, 0.675, 0.190);
                        case 'easeInQuart' : return this.bezier(step,0.895, 0.030, 0.685, 0.220);
                        case 'easeInQuint' : return this.bezier(step,0.755, 0.050, 0.855, 0.060);
                        case 'easeInSine' : return this.bezier(step,0.470, 0.000, 0.745, 0.715);
                        case 'easeInExpo' : return this.bezier(step,0.950, 0.050, 0.795, 0.035);
                        case 'easeInCirc' : return this.bezier(step,0.600, 0.040, 0.980, 0.335);
                        case 'easeInBack' : return this.bezier(step,0.600, -0.280, 0.735, 0.045);
                        case 'easeOutQuad' : return this.bezier(step,0.250, 0.460, 0.450, 0.940);
                        case 'easeOutCubic' : return this.bezier(step,0.215, 0.610, 0.355, 1.000);
                        case 'easeOutQuart' : return this.bezier(step,0.165, 0.840, 0.440, 1.000);
                        case 'easeOutQuint' : return this.bezier(step,0.230, 1.000, 0.320, 1.000);
                        case 'easeOutSine' : return this.bezier(step,0.390, 0.575, 0.565, 1.000);
                        case 'easeOutExpo' : return this.bezier(step,0.190, 1.000, 0.220, 1.000);
                        case 'easeOutCirc' : return this.bezier(step,0.075, 0.820, 0.165, 1.000);
                        case 'easeOutBack' : return this.bezier(step,0.175, 0.885, 0.320, 1.275);
                        case 'easeInOutQuad' : return this.bezier(step,0.455, 0.030, 0.515, 0.955);
                        case 'easeInOutCubic' : return this.bezier(step,0.645, 0.045, 0.355, 1.000);
                        case 'easeInOutQuart' : return this.bezier(step,0.770, 0.000, 0.175, 1.000);
                        case 'easeInOutQuint' : return this.bezier(step,0.860, 0.000, 0.070, 1.000);
                        case 'easeInOutSine' : return this.bezier(step,0.445, 0.050, 0.550, 0.950);
                        case 'easeInOutExpo' : return this.bezier(step,1.000, 0.000, 0.000, 1.000);
                        case 'easeInOutCirc' : return this.bezier(step,0.785, 0.135, 0.150, 0.860);
                        case 'easeInOutBack' : return this.bezier(step,0.680, -0.550, 0.265, 1.550);
                        case 'custom' : return this.bezier(step,val[0] || 0.250 ,val[1] || 0.250,val[2] || 0.250,val[3] || 0.250);
                        default : return this.bezier(step,0.250, 0.250, 0.750, 0.750);
                };
        },
        /**
         * addStyle
         * =============================================================================
         * Permet d'appliquer un style à un element passé en paramétre
         *
         * @param       elem      {object}    élement auquel on souhaite appliquer le style.
         * @param       valeur    {double}    valeur à appliquer.
         * @param       style     {double}    style que l'on souhaite aplliquer (opacity,margin,padding ...).
         * @param       unit      {string}    est une chaine de caractére représentant l'unité souhaité (px,%,em ...)
         * @return      result    {double}    Résultat du calcul.
         *
        */
        addStyle:function(elem,valeur,style,unit){
                elem.style[style]=valeur+unit;
        },
        /**
         * Emulateur
         * =============================================================================
         * permet d'animer un objet (simule les transitions et animations css3)
         *
         * @requires    addStyle		
         * @requires    bezier
         * @requires    setOpa      (uniquement pour les animation de la propriété 'opacity' sur des navigateurs anciens)
         *
         */
        Emulateur:function(){
                 /**
                 * init
                 * -------------------------------------------------------------------------
                 * lance l'animation, avec les options /infos/
                 *
                 * @param       info          {Object}       les options pour cette occurence de l'animation
                   {
                        elem : élement DOM qui sera animé
                    callback: code que l'on souhaite exécuté à la fin de l'animation
                        valeur: valeur à appliquer
                        vitesse: temps de l'animation
                        effet: propriété que l'on souhaite animer (width, margin...) ou effet souhaité (fade ...)
                        easing: contient les valeurs x1,y1,x2,y2 et t pour la courbe de bezier
                        unit: unité dans laquelle on souhaite effectuer l'animation.
                   }
                 * 
                 */
                this.init=function(info){	
                        this.startTime = new Date().getTime();
                        switch(info.effet){
                                case 'fade':info.effet = (Modernizr.opacity)?Bsolidaire.addStyle:Bsolidaire.setOpa;info.style='opacity';break;
                                case 'height':info.effet = Bsolidaire.addStyle;info.style='height';break;
                                case 'width':info.effet = Bsolidaire.addStyle;info.style='width';break;
                                default:info.effet = Bsolidaire.addStyle;break;
                        }
                        info.valeur.start = parseInt(info.valeur.start);
                        info.valeur.end = parseInt(info.valeur.end);
                        this.next(info);
                };
                /**
                 * next
                 * -------------------------------------------------------------------------
                 * timer permettant de cadencer l'animation
                 * 
                 */
                this.next=function(info){
                        var self = this;
                        this.timer = setTimeout(function(){
                                self.etape(info);
                        },17);
                };
                /**
                 * etape
                 * -------------------------------------------------------------------------
                 * exécution d'une étape de l'animation
                 * 
                 */
                this.etape=function(info){
                        var time = new Date().getTime(),diff = time - this.startTime,step = diff/info.vitesse,
                        newval = RifNoir.bezier(step,info.easing.x1, info.easing.x2, info.easing.x3, info.easing.x4),
                        calcul = info.valeur.start+(newval*(info.valeur.end-info.valeur.start));
                        (calcul <=0)?calcul=0:calcul;
                        info.effet(info.elem,calcul,info.style,info.unit);
                        if(time >= info.vitesse+this.startTime){
                                info.effet(info.elem,info.valeur.end,info.style,info.unit);
                                (info.callback)?info.callback():'';
                        }else{
                                clearTimeout(this.timer);
                                this.next(info);
                        }
                };
        },
        prefixe:['transitionend','OTransitionEnd','webkitTransitionEnd','mozTransitionEnd'],
	pre:['transitionDuration','OTransitionDuration','webkitTransitionDuration','mozTransitionDuration'],
        TransitionEnd:function(elem,callback){
            var l=this.prefixe.length,i=0;
            for(i;i<l;i++){
                this.addEvent(this.prefixe[i],callback,false,elem);
            }
        },
        Eta_nav:false,
        Btn_nav:function(){
            if(Modernizr.csstransitions){
                return function(){
                    var menu= Bsolidaire.id('nav_cache'),
                    taille = Bsolidaire.byName('ul',menu);
                    if(!Bsolidaire.Eta_nav){
                        taille=taille.offsetHeight;
                        menu.style.height=taille+'px';
                        Bsolidaire.Eta_nav=true; 
                    }else{
                        menu.style.height=0;
                        Bsolidaire.Eta_nav=false;
                    }
                }; 
            }else{
                // Envoyer à l'émulateur pour les vieux navigateurs
            }
        }()
};
// Création du raccourci $B
(!window.$B)?window.$B=Bsolidaire:alert('Le raccourci du framework Bsolidaire ne peut pas être mis en place');

// Début du code ----------

/*Evenement appliqué au document */


/* Initialisation évenement bouton navigation page du site : #btn_nav */
var btn = $B.id('btn_nav');
if(btn){
    $B.addEvent('click',$B.Btn_nav,false,btn);
}
//

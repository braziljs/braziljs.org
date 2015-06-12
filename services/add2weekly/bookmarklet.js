(function(d){

    var iSrc= 'http://braziljs.org/services/add2weekly/mdl-add2weekly.php?',
    create= function(t, l, c, dv){
        var i= d.createElement('iframe');
        c.appendChild(dv);
        i.src= iSrc+"t="+t+"&l="+l.replace(/http:\/\/|https:\/\//i, '');
        dv.style.position= 'fixed';
        dv.style.background= 'white';
        dv.style.top= '0px';
        dv.style.left= '0px';
        dv.style.zIndex= '99999999';
        dv.style.margin= '0px';
        dv.style.width= '550px';
        dv.style.height= '450px';
        dv.style.boxShadow= '0px 0px 30px black';
        dv.id= 'brazilJS-add2wkly';
        i.style.border= 'none';
        i.style.height= '100%';
        i.style.width= '100%';

        dv.innerHTML= "<input id=braziljsa2w-closeBtn type=button value=Fechar style='position:absolute;right:124px;bottom:14px;display:block;height:50px;width:100px;color:#8f5a0a;cursor:pointer;border:solid 1px #d69e31;border-color:#d69e31 #e3a037 #d5982d #e3a037;border-radius: 6px;font-size: 15px;background-color: #ffb94b;background-image: -webkit-gradient(linear, left top, left bottom, from(#fddb6f), to(#ffb94b));background-image: -webkit-linear-gradient(top, #fddb6f, #ffb94b);background-image: -moz-linear-gradient(top, #fddb6f, #ffb94b);background-image: -ms-linear-gradient(top, #fddb6f, #ffb94b);background-image: -o-linear-gradient(top, #fddb6f, #ffb94b);background-image: linear-gradient(top, #fddb6f, #ffb94b);text-shadow: 0 1px 0 rgba(255,255,255,0.5);box-shadow: 0 0 1px rgba(0, 0, 0, 0.3), 0 1px 0 rgba(255, 255, 255, 0.3) inset;' onmouseover=\"this.style.fontWeight='bold'\" onmouseout=\"this.style.fontWeight='normal'\"/>";

        dv.appendChild(i);

        d.getElementById('braziljsa2w-closeBtn').onclick= function(){
            dv.parentNode.removeChild(dv);
        };
    };
    create(d.title, location.toString(), d.body||d, d.createElement('div'));
})(document);
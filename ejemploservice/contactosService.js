app.service('ContactosService',
    ['$resource',function($resource){
       this.elNom = "pablo";
      
        var cont1 = new Contacto();
       cont1.nom="Zelda";
       cont1.email="Zelda@Yrule.com";
       var cont2 = new Contacto();
       cont2.nom="Link";
       cont2.email="Link@Yrule.com";
       
       this.ajaxContacto = function () {
            return $resource('contactos.php/contacto/:id', null,{
                        'update': {method: 'PUT'}
                    });
        };

       
    }]);
    
function Contacto(){
    this.nom="";
    this.email="";
}
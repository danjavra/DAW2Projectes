app.service("PeliculasService",function(){
            this.actores=[
                [
                    nombre="Harrison",
                    apellidos="Ford",
                    nacimiento="12-07-1942",
                    nacionalidad="estadounidense"
                ],
                [
                    nombre="Mary Sean",
                    apellidos="Young",
                    nacimiento="20-10-1959",
                    nacionalidad="estadounidense"]
            ];
 
            this.getActores = function () {
            return actores;
            };
            this.getActor = function (index)
            {
            return actores[index];
            
            };    
            
            this.peliculas=[
              [  
                nombre="Indiana Jones",
                director="Spielberg",
                año="1992",
                actores= [
                    nombre="Harrison",
                    apellidos="Ford",
                    nacimiento="12-07-1942",
                    nacionalidad="estadounidense"
                ],
                [
                    nombre="Sean",
                    apellidos="Connery",
                    nacimiento="25-08-1930",
                    nacionalidad="estadounidense"
                ]
                
              ],
              [  
                nombre="Regreso al futuro",
                director="Robert Zemeckis",
                año="1985",
                actores= [
                    nombre="Michael",
                    apellidos="J.Fox",
                    nacimiento="09-06-1961",
                    nacionalidad="estadounidense"
                ],
                [
                    nombre="Christopher",
                    apellidos="Lloyd",
                    nacimiento="22-10-1938",
                    nacionalidad="estadounidense"
                ]
                
              ]
                ];
                
                this.getPeliculas = function () {
            return this.peliculas;
            };
            this.getPelicula = function (index)
            {
            return peliculas[index];
            
            };    
});
<!-- 
 **************************************************************************************************** 
    
    Autor: Meza Wakahayashi, Juan Ignacio
    Curso: Talentos Digitales
    Modulo: II
    Trabajo Parctico: Tarea Integradora 2. 

    Este archivo PHP trata sobre la pagina donde se indica "Ingresar a la cuenta (loguin)"

*****************************************************************************************************
    -->

<div class="container">
    <div class="row justify-content-center align-items-center" style="height: 60vh;">

       <div class="col-12 col-md-8 col-lg-6">
            <div class="card p-4">
  
             <section>
              <p>
                <h4 class="h4">Ingresar a su cuenta de Cafeteria NIPPON</h4>
                  
              </p>
              </section>





               <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Usuario</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
   
                    <div class="mb-3">
                         <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
   
                    <div class="mb-3 form-check">
    
    
                   </div>
  
                 <div  class="d-flex justify-content-center">
            
                    <button type="submit" class="btn btn-outline-success mx-5">Ingresar</button>

                     <button type="reset" class="btn btn-outline-danger">Cancelar</button>



             
                   </div>
                   <p>
              
                   </p>
                   <span>¿Aun no se ha Registrado? <a href="<?php echo base_url('registracion'); ?>"> Registrese Aqui </a></span>
                </div>
              </div>
             </div>
            </div>  
         </form>
     </div>

      <section>
          <p>
              
          </p>
 </section>            
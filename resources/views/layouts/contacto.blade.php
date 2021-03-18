@extends('master')
@section('content')

<nav class="bread-crumbs">
               <div class="container">
                  <div class="row">
                     <div class="col-12">
                        <ul id="bread-crumbs" class="bread-crumbs-list">
                           <li class="item-home"><a class="bread-link bread-home" href="/index" title="Home">Inicio</a></li>
                           <li class="separator separator-home"> <i class="material-icons md-18">chevron_right</i> </li>
                           <li class="item-current item-1085"><span class="bread-current bread-1085" href="/contacto"> Contacto</span></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </nav>
            <div 
            style="padding-top: 10px;"   class="section"
               >
               <div class="container">
                  <div class="row items">
                     <div class="col-12">
                        <div class="wrapp-section-title">
                           
                           <h1 style="text-align: center;" lass="section-title">Contácte con Nosotros</h1>
                        </div>
                     </div>
                     <div class="col-xl-4 col-md-5 item">
                        <div class="contact-info section-bg">
                           <h3>Información</h3>
                           <ul class="contact-list">
                              <li>
                                 <i class="material-icons md-22">location_on</i>
                                 <div class="footer-contact-info">
                                    <p>Dirección</p>
                                 </div>
                              </li>
                              <li>
                                 <i class="material-icons md-22">smartphone</i>
                                 <div class="footer-contact-info">
                                    <a class="formingHrefTel" href="#!">Teléfono</a><a class="formingHrefTel" href="#!">+1 323-888-4554</a>                
                                 </div>
                              </li>
                              <li>
                                 <i class="material-icons md-22">email</i>
                                 <div class="footer-contact-info">
                                    <a href="mailto:mail@example.com">correo@mail.com</a><a href="mailto:info@example.com">info@example.com</a>                
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-xl-8 col-md-7 item">
                        <div class="contact-form-padding">
                           <div role="form" class="wpcf7" id="wpcf7-f2234-p1085-o1" lang="en-US" dir="ltr">
                              <div class="screen-reader-response">
                                 <p role="status" aria-live="polite" aria-atomic="true"></p>
                                 <ul></ul>
                              </div>
                              <form action="/contact-us/#wpcf7-f2234-p1085-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                                 <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="2234" />
                                    <input type="hidden" name="_wpcf7_version" value="5.3.1" />
                                    <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f2234-p1085-o1" />
                                    <input type="hidden" name="_wpcf7_container_post" value="1085" />
                                    <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                    <input type="hidden" name="_wpcf7_recaptcha_response" value="" />
                                 </div>
                                 <div class="row gutters-default">
                                    <div class="col-sm-6 col-12">
                                       <div class="form-field">
                                          <label for="contact-name" class="form-field-label">Nombre</label><br />
                                          <span class="wpcf7-form-control-wrap text-10"><input type="text" name="text-10" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-field-input" id="contact-name" autocomplete="off" aria-required="true" aria-invalid="false" /></span>
                                       </div>
                                       </p>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                       <div class="form-field">
                                          <label for="contact-phone" class="form-field-label">Teléfono</label><br />
                                          <span class="wpcf7-form-control-wrap tel-10"><input type="tel" name="tel-10" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form-field-input" id="contact-phone" autocomplete="off" aria-required="true" aria-invalid="false" /></span>
                                       </div>
                                       </p>
                                    </div>
                                    <div class="col-12">
                                       <div class="form-field">
                                          <label for="contact-email" class="form-field-label">Correo</label><br />
                                          <span class="wpcf7-form-control-wrap email-10"><input type="email" name="email-10" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-field-input" id="contact-email" autocomplete="off" aria-required="true" aria-invalid="false" /></span>
                                       </div>
                                       </p>
                                    </div>
                                    <div class="col-12">
                                       <div class="form-field">
                                          <label for="contact-message" class="form-field-label">Escribe tu mensaje</label><br />
                                          <span class="wpcf7-form-control-wrap textarea-10"><textarea name="textarea-10" cols="40" rows="6" class="wpcf7-form-control wpcf7-textarea form-field-input" id="contact-message" aria-invalid="false"></textarea></span>
                                       </div>
                                       </p>
                                    </div>
                                    <div class="col-12">
                                       <div class="form-btn">
                                          <input type="submit" value="Enviar Mensaje" class="wpcf7-form-control wpcf7-submit btn btn-w240 ripple" />
                                       </div>
                                       </p>
                                    </div>
                                 </div>
                                 <div class="wpcf7-response-output" aria-hidden="true"></div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            
            
         </div>
         <!-- End inner -->
@endsection
<!-- start banner Area -->

<section class="about-banner">

	<div class="container">

		<div class="row d-flex align-items-center justify-content-center">

			<div class="about-content col-lg-12">

				<p class="text-white link-nav"><a href="<?= base_url(); ?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="produtos">Produtos</a></p>

				<h1 class="text-white">

					Produtos

				</h1>
                
                <?php $this->load->view('whats/whats'); ?>

			</div>

		</div>

	</div>

</section>

<section class="section-gap-prod">
	<div class="container">
        <div class="row">
          <div class="col-xl-3 col-12">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-maquinas-tab" data-toggle="pill" href="#v-pills-maquinas" role="tab" aria-controls="v-pills-maquinas" aria-selected="true">Máquinas de Arquear</a>
              <a class="nav-link" id="v-pills-fitas-tab" data-toggle="pill" href="#v-pills-fitas" role="tab" aria-controls="v-pills-fitas" aria-selected="false">Fitas de Arquear</a>
              <a class="nav-link" id="v-pills-cantoneira-tab" data-toggle="pill" href="#v-pills-cantoneira" role="tab" aria-controls="v-pills-cantoneira" aria-selected="false">Cantoneiras</a>
              <a class="nav-link" id="v-pills-envolvedoras-tab" data-toggle="pill" href="#v-pills-envolvedoras" role="tab" aria-controls="v-pills-envolvedoras" aria-selected="false">Envolvedoras</a>
              <a class="nav-link" id="v-pills-manual-tab" data-toggle="pill" href="#v-pills-manual" role="tab" aria-controls="v-pills-manual" aria-selected="false">Aparelhos de Arquear Manuais</a>
              <a class="nav-link" id="v-pills-stretch-tab" data-toggle="pill" href="#v-pills-stretch" role="tab" aria-controls="v-pills-stretch" aria-selected="false">Filme Stretch</a>
              <a class="nav-link" id="v-pills-selos-tab" data-toggle="pill" href="#v-pills-selos" role="tab" aria-controls="v-pills-selos" aria-selected="false">Selos para Fitas de Arquear</a>
              <a class="nav-link" id="v-pills-semi-tab" data-toggle="pill" href="#v-pills-semi" role="tab" aria-controls="v-pills-semi" aria-selected="false">Máquina Semiautomática</a>
              <a class="nav-link" id="v-pills-aplica-tab" data-toggle="pill" href="#v-pills-aplica" role="tab" aria-controls="v-pills-aplica" aria-selected="false">Aplicador de Filme Stretch</a>
              <a class="nav-link" id="v-pills-adesiva-tab" data-toggle="pill" href="#v-pills-adesiva" role="tab" aria-controls="v-pills-adesiva" aria-selected="false">Fita Adesiva</a>
              <a class="nav-link" id="v-pills-fitilho-tab" data-toggle="pill" href="#v-pills-fitilho" role="tab" aria-controls="v-pills-fitilho" aria-selected="false">Fitilho Comum</a>
              <a class="nav-link" id="v-pills-acesso-tab" data-toggle="pill" href="#v-pills-acesso" role="tab" aria-controls="v-pills-acesso" aria-selected="false">Acessórios</a>
            </div>
          </div>
          <div class="col-xl-9">
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-maquinas" role="tabpanel" aria-labelledby="v-pills-maquinas-tab">
                <div class="row">
                <div class="col-lg-3 col-md-2">
                        <a href="<?= base_url('maquina-v2'); ?>">
                        <img class="myImg" src="<?= base_url('assets/img/produtos/maquina-arquear-v2.webp'); ?>" alt="Máquina de Arquear JDC" />
                        </a>
                        <h6>Máquina de Arquear V2</h6> 
                    </div>   
                    <div class="col-lg-3 col-md-2">
                        <a href="<?= base_url('maquina-de-arquear-j-50');?>">
                        <img class="myImg" src="<?= base_url('assets/img/produtos/maquina-de-arquear-j-50.webp');?>" alt="Máquina de Arquear J-50" />
                        </a>
                        <h6>Máquina de Arquear J-50</h6> 
                    </div>
                     
                    <div class="col-lg-3 col-md-2">
                        <a href="<?= base_url('maquina-de-arquear-j-42'); ?>">
                        <img class="myImg" src="<?= base_url('assets/img/produtos/maquina-de-arquear-j-42.webp'); ?>" alt="Máquina de Arquear J42" />
                        </a>
                        <h6>Máquina de Arquear J42</h6> 
                    </div>
                    <div class="col-lg-3 col-md-2">
                        <a href="<?= base_url('maquina-arquear-pneumatica'); ?>">
                        <img class="myImg" src="<?= base_url('assets/img/produtos/maquina-arquear-pneumatica.webp'); ?>" alt="Máquina de Arquear Pneumática" />
                        </a>
                        <h6>Máquina de Arquear Pneumática</h6> 
                    </div>
                    <div class="col-lg-3 col-md-2">
                        <a href="<?= base_url('maquina-h45'); ?>">
                        <img class="myImg" src="<?= base_url('assets/img/produtos/maquina-de-arquear-pet-a-bateria-h45.webp'); ?>" alt="Máquina de Arquear H45" />
                        </a>
                        <h6>Máquina de Arquear H45</h6> 
                    </div>
                    <div class="col-lg-3 col-md-2">
                        <a href="<?= base_url('maquina-jdc'); ?>">
                        <img class="myImg" src="<?= base_url('assets/img/produtos/maquina-de-arquear-jdc.webp'); ?>" alt="Máquina de Arquear JDC" />
                        </a>
                        <h6>Máquina de Arquear JDC</h6> 
                    </div>            
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-fitas" role="tabpanel" aria-labelledby="v-pills-fitas-tab">
                <div class="row">            
                    <div class="col-lg-3 col-md-6">
                        <a href="<?= base_url('fita-pet-virgem'); ?>">
                        <img class="myImg" src="<?= base_url('assets/img/produtos/fita-pet-virgem.webp'); ?>" alt="Fita PET Virgem" />
                        </a>
                        <h6>Fita PET Virgem</h6> 
                    </div>
                     
                    <div class="col-lg-3 col-md-6">
                        <a href="<?= base_url('fita-phoenix-cinza'); ?>">
                        <img class="myImg" src="<?= base_url('assets/img/produtos/fita-phoenix-cinza.webp'); ?>" alt="Fita Phoenix Cinza" />
                        </a>
                        <h6>Fita Phoenix Cinza</h6> 
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="<?= base_url('fita-phoenix-incolor'); ?>">
                        <img class="myImg" src="<?= base_url('assets/img/produtos/fita-phoenix-incolor.webp'); ?>" alt="Fita Phoenix Incolor" />
                        </a>
                        <h6>Fita Phoenix Incolor</h6> 
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="<?= base_url('fita-pp'); ?>">
                        <img class="myImg" src="<?= base_url('assets/img/produtos/Fita-PP.webp'); ?>" alt="Fita PP" />
                        </a>
                        <h6>Fita PP</h6> 
                    </div>
                </div>
                <div class="row">            
                    <div class="col-lg-3 col-md-6">
                        <a href="<?= base_url('fita-de-aco-laqueada'); ?>">
                        <img class="myImg" src="<?= base_url('assets/img/produtos/fita-de-aco-laqueada.webp'); ?>" alt="Fita De Aço Laqueada" />
                        </a>
                        <h6>Fita De Aço Laqueada</h6> 
                    </div>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-cantoneira" role="tabpanel" aria-labelledby="v-pills-cantoneira-tab">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <a href="<?= base_url('cantoneiras-de-papelao'); ?>">
                        <img class="myImg" src="<?= base_url('assets/img/produtos/cantoneiras-de-papelao.webp'); ?>" alt="Cantoneira de Papelão" />
                        </a>
                        <h6>Cantoneira de Papelão</h6> 
                    </div>
                </div>
              </div>
              
                <div class="tab-pane fade" id="v-pills-envolvedoras" role="tabpanel" aria-labelledby="v-pills-envolvedoras-tab">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <a href="<?= base_url('envolvedora-mbpack-caf-pt-pst'); ?>">
                            <img class="myImg" src="<?= base_url('assets/img/produtos/envolvedora-mbpack-caf-pt-pst.webp'); ?>" alt="Envolvedora MBPACK CAF/PT/PST" />
                            </a>
                            <h6>Envolvedora MBPACK CAF/PT/PST</h6> 
                        </div>
                       
                        <div class="col-lg-3 col-md-6">
                            <a href="<?= base_url('envolvedora-paletizadora-mb-2000'); ?>">
                            <img class="myImg" src="<?= base_url('assets/img/produtos/envolvedora-paletizadora-mb-2000.webp'); ?>" alt="Envolvedora/Paletizadora - MBPACK 2000" />
                            </a>
                            <h6>Envolvedora/ Paletizadora - MBPACK 2000</h6> 
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a href="<?= base_url('envolvedora-paletizadora-2000-c'); ?>">
                            <img class="myImg" src="<?= base_url('assets/img/produtos/envolvedora-paletizadora-2000-c.webp'); ?>" alt="Envolvedora/Paletizadora - MBPACK 2000 C" />
                            </a>
                            <h6>Envolvedora/ Paletizadora - MBPACK 2000 C</h6> 
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a href="<?= base_url('envolvedora-mbpack-cap-1500-c'); ?>">
                            <img class="myImg" src="<?= base_url('assets/img/produtos/envolvedora-mbpack-cap-1500.webp'); ?>" alt="Envolvedora/Paletizadora - MBPACK 2000 C" />
                            </a>
                            <h6>Envolvedora MBPACK CAP 1.500 C</h6> 
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a href="<?= base_url('envolvedora-orbital'); ?>">
                            <img class="myImg" src="<?= base_url('assets/img/produtos/envolvedora-orbital.webp'); ?>" alt="Envolvedora/Paletizadora - MBPACK 2000 C" />
                            </a>
                            <h6>Envolvedora Orbital</h6> 
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a href="<?= base_url('paletizadora-envolvedora-2000-b'); ?>">
                            <img class="myImg" src="<?= base_url('assets/img/produtos/paletizadora-envolvedora-2000-b.webp'); ?>" alt="Envolvedora/Paletizadora - MBPACK 2000 C" />
                            </a>
                            <h6>Paletizadora/ Envolvedora 2000 B</h6> 
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a href="<?= base_url('envolvedora-paletizadora-2000-a'); ?>">
                            <img class="myImg" src="<?= base_url('assets/img/produtos/envolvedora-paletizadora-mb-2000-a.webp'); ?>" alt="Envolvedora/Paletizadora - MBPACK 2000 C" />
                            </a>
                            <h6>Envolvedora/ Paletizadora - 2000 A</h6> 
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a href="<?= base_url('envolvedora-paletizadora-1000'); ?>">
                            <img class="myImg" src="<?= base_url('assets/img/produtos/paletizadora-envolvedora-1000.webp'); ?>" alt="Envolvedora/Paletizadora - MBPACK 2000 C" />
                            </a>
                            <h6>Envolvedora/ Paletizadora 1000</h6> 
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a href="<?= base_url('envolvedora-mbpack-cs-1500'); ?>">
                            <img class="myImg" src="<?= base_url('assets/img/produtos/envolvedora-mbpack-cs-1500.webp'); ?>" alt="Envolvedora/Paletizadora - MBPACK 2000 C" />
                            </a>
                            <h6>Envolvedora MBPACK CS 1.500</h6> 
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a href="<?= base_url('envolvedora-mbpack-ca-1500'); ?>">
                            <img class="myImg" src="<?= base_url('assets/img/produtos/envolvedora-mma-ca-1500.webp'); ?>" alt="Envolvedora/Paletizadora - MBPACK 2000 C" />
                            </a>
                            <h6>Envolvedora MBPACK CA 1.500</h6> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-manual" role="tabpanel" aria-labelledby="v-pills-manual-tab">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <a href="<?= base_url('polystrap'); ?>">
                            <img class="myImg" src="<?= base_url('assets/img/produtos/polystrap.webp'); ?>" alt="Polystrap" />
                            </a>
                            <h6>Polystrap</h6> 
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a href="<?= base_url('conjunto-pet'); ?>">
                            <img class="myImg" src="<?= base_url('assets/img/produtos/conjunto-pet.webp'); ?>" alt="Conjunto PET" />
                            </a>
                            <h6>Conjunto PET</h6> 
                         </div>                      
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-stretch" role="tabpanel" aria-labelledby="v-pills-stretch-tab">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <a href="<?= base_url('filmes-stretch'); ?>">
                            <img class="myImg" src="<?= base_url('assets/img/produtos/filme-stretch.webp'); ?>" alt="Filmes Stretch" />
                            </a>
                            <h6>Filmes Stretch</h6>  
                         </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-selos" role="tabpanel" aria-labelledby="v-pills-selos-tab">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <a href="<?= base_url('selo-pet'); ?>">
                            <img class="myImg" src="<?= base_url('assets/img/produtos/selo-pet.webp'); ?>" alt="Selo PET" />
                            </a>
                            <h6>Selo PET</h6>   
                         </div>
                         <div class="col-lg-3 col-md-6">
                            <a href="<?= base_url('selo-pp'); ?>">
                            <img class="myImg" src="<?= base_url('assets/img/produtos/selo-pp.webp'); ?>" alt="Selo PP" />
                            </a>
                            <h6>Selo PP</h6>   
                         </div>
                         <div class="col-lg-3 col-md-6">
                            <a href="<?= base_url('selo-tr-fita-aco'); ?>">
                            <img class="myImg" src="<?= base_url('assets/img/produtos/selo-tr.webp'); ?>" alt="Selo TR para Fita de Aço" />
                            </a>
                            <h6>Selo TR para Fita de Aço</h6>   
                         </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-semi" role="tabpanel" aria-labelledby="v-pills-semi-tab">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <a href="<?= base_url('maquina-automatica-dba'); ?>">
                            <img class="myImg" src="<?= base_url('assets/img/produtos/maquina-automatica-dba.webp'); ?>" alt="Máquina Automática DBA" />
                            </a>
                            <h6>Máquina Automática DBA</h6>   
                         </div>
                         <div class="col-lg-3 col-md-6">
                            <a href="<?= base_url('maquina-semiautomatica-polimax-tp201'); ?>">
                            <img class="myImg" src="<?= base_url('assets/img/produtos/maquina-semiautomatica-polimax-tp201.webp'); ?>" alt="Máquina Semiautomática TP201" />
                            </a>
                            <h6>Máquina Semiautomática TP201</h6>   
                         </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-aplica" role="tabpanel" aria-labelledby="v-pills-aplica-tab">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <a href="<?= base_url('aplicadora-filme-stretch'); ?>">
                            <img class="myImg" src="<?= base_url('assets/img/produtos/Aplicadora-De-Filme-Stretch.webp'); ?>" alt="Aplicadora Filme Stretch" />
                            </a>
                            <h6>Aplicadora Filme Stretch</h6>   
                         </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-adesiva" role="tabpanel" aria-labelledby="v-pills-adesiva-tab">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <a href="<?= base_url('fitas-adesivas'); ?>">
                            <img class="myImg" src="<?= base_url('assets/img/produtos/fitas-adesivas.webp'); ?>" alt="Fitas Adesivas" />
                            </a>
                            <h6>Fitas Adesivas</h6>   
                         </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-fitilho" role="tabpanel" aria-labelledby="v-pills-fitilho-tab">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <a href="<?= base_url('fitilho-comum'); ?>">
                            <img class="myImg" src="<?= base_url('assets/img/produtos/fitilho-comum.webp'); ?>" alt="Fitilho Comum" />
                            </a>
                            <h6>Fitilho Comum</h6>    
                         </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-acesso" role="tabpanel" aria-labelledby="v-pills-acesso-tab">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <a href="<?= base_url('bateria-h45'); ?>">
                            <img class="myImg" src="<?= base_url('assets/img/produtos/bateria-h45.webp'); ?>" alt="Bateria H45" />
                            </a>
                            <h6>Bateria H-45</h6>    
                         </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
</section>





<section class="section-gap-cel">
    <div class="container">
        <div class="row">
        <div class="col-lg-2 col-md-6">
            <a href="<?= base_url('maquina-v2'); ?>">
            <img class="myImg" src="<?= base_url('assets/img/produtos/maquina-arquear-v2.webp'); ?>" alt="Máquina de Arquear JDC" />
            </a>
            <h6>Máquina de Arquear V2</h6> 
        </div>    

        <div class="col-lg-2 col-md-6">
            <a href="<?= base_url('maquina-de-arquear-j-50');?>">
            <img class="myImg" src="<?= base_url('assets/img/produtos/maquina-de-arquear-j-50.webp');?>" alt="Máquina de Arquear J-50" />
            </a>
            <h6>Máquina de Arquear J-50</h6> 
        </div>
         
        <div class="col-lg-2 col-md-6">
            <a href="<?= base_url('maquina-de-arquear-j-42'); ?>">
            <img class="myImg" src="<?= base_url('assets/img/produtos/maquina-de-arquear-j-42.webp'); ?>" alt="Máquina de Arquear J42" />
            </a>
            <h6>Máquina de Arquear J42</h6> 
        </div>
        <div class="col-lg-2 col-md-6">
            <a href="<?= base_url('maquina-arquear-pneumatica'); ?>">
			<img class="myImg" src="<?= base_url('assets/img/produtos/maquina-arquear-pneumatica.webp'); ?>" alt="Máquina de Arquear Pneumática" />
			</a>
			<h6>Máquina de Arquear Pneumática</h6> 
        </div>
        <div class="col-lg-2 col-md-6">
            <a href="<?= base_url('maquina-h45'); ?>">
			<img class="myImg" src="<?= base_url('assets/img/produtos/maquina-de-arquear-pet-a-bateria-h45.webp'); ?>" alt="Máquina de Arquear H45" />
			</a>
			<h6>Máquina de Arquear H45</h6> 
        </div>
          
        <div class="col-lg-2 col-md-6">
            <a href="<?= base_url('maquina-jdc'); ?>">
			<img class="myImg" src="<?= base_url('assets/img/produtos/maquina-de-arquear-jdc.webp'); ?>" alt="Máquina de Arquear JDC" />
			</a>
			<h6>Máquina de Arquear JDC</h6> 
        </div>
        </div>
          
        <div class="row">
        <div class="col-lg-2 col-md-6">
            <a href="<?= base_url('fita-pet-virgem'); ?>">
			<img class="myImg" src="<?= base_url('assets/img/produtos/fita-pet-virgem.webp'); ?>" alt="Fita PET Virgem" />
			</a>
			<h6>Fita PET Virgem</h6>  
        </div>

        <div class="col-lg-2 col-md-6">
            <a href="<?= base_url('fita-phoenix-cinza'); ?>">
			<img class="myImg" src="<?= base_url('assets/img/produtos/fita-phoenix-cinza.webp'); ?>" alt="Fita Phoenix Cinza" />
			</a>
			<h6>Fita Phoenix Cinza</h6> 
        </div>

        <div class="col-lg-2 col-md-6">
             <a href="<?= base_url('fita-phoenix-incolor'); ?>">
			<img class="myImg" src="<?= base_url('assets/img/produtos/fita-phoenix-incolor.webp'); ?>" alt="Fita Phoenix Incolor" />
			</a>
			<h6>Fita Phoenix Incolor</h6> 
        </div>
        <div class="col-lg-2 col-md-6">
            <a href="<?= base_url('fita-pp'); ?>">
			<img class="myImg" src="<?= base_url('assets/img/produtos/Fita-PP.webp'); ?>" alt="Fita PP" />
			</a>
			<h6>Fita PP</h6> 
        </div>
        <div class="col-lg-2 col-md-6">
            <a href="<?= base_url('fita-de-aco-laqueada'); ?>">
			<img class="myImg" src="<?= base_url('assets/img/produtos/fita-de-aco-laqueada.webp'); ?>" alt="Fita De Aço Laqueada" />
			</a>
			<h6>Fita De Aço Laqueada</h6> 
        </div>
          
        <div class="col-lg-2 col-md-6">
             <a href="<?= base_url('cantoneiras-de-papelao'); ?>">
			<img class="myImg" src="<?= base_url('assets/img/produtos/cantoneiras-de-papelao.webp'); ?>" alt="Cantoneira de Papelão" />
			</a>
			<h6>Cantoneira de Papelão</h6> 
        </div>
        </div>

        <div class="row">
        <div class="col-lg-2 col-md-6">
                <a href="<?= base_url('envolvedora-mbpack-caf-pt-pst'); ?>">
				<img class="myImg" src="<?= base_url('assets/img/produtos/envolvedora-mbpack-caf-pt-pst.webp'); ?>" alt="Envolvedora MBPACK CAF/PT/PST" />
				</a>
				<h6>Envolvedora MBPACK CAF/PT/PST</h6>  
            </div> 

            <div class="col-lg-2 col-md-6">
                <a href="<?= base_url('envolvedora-paletizadora-mb-2000'); ?>">
                <img class="myImg" src="<?= base_url('assets/img/produtos/envolvedora-paletizadora-mb-2000.webp'); ?>" alt="Envolvedora/Paletizadora - MBPACK 2000" />
                </a>
                <h6>Envolvedora/ Paletizadora - MBPACK 2000</h6> 
            </div>
              
            <div class="col-lg-2 col-md-6">
                <a href="<?= base_url('envolvedora-paletizadora-2000-c'); ?>">
				<img class="myImg" src="<?= base_url('assets/img/produtos/envolvedora-paletizadora-2000-c.webp'); ?>" alt="Envolvedora/Paletizadora - MBPACK 2000 C" />
				</a>
				<h6>Envolvedora/ Paletizadora - MBPACK 2000 C</h6> 
            </div>

            <div class="col-lg-2 col-md-6">
                <a href="<?= base_url('envolvedora-mbpack-cap-1500-c'); ?>">
				<img class="myImg" src="<?= base_url('assets/img/produtos/envolvedora-mbpack-cap-1500.webp'); ?>" alt="Envolvedora MBPACK CAP 1.500 C" />
				</a>
				<h6>Envolvedora MBPACK CAP 1.500 C</h6> 
            </div>

            <div class="col-lg-2 col-md-6">
                <a href="<?= base_url('envolvedora-orbital'); ?>">
				<img class="myImg" src="<?= base_url('assets/img/produtos/envolvedora-orbital.webp'); ?>" alt="Envolvedora Orbital" />
				</a>
				<h6>Envolvedora Orbital</h6> 
            </div>

            <div class="col-lg-2 col-md-6">
                <a href="<?= base_url('paletizadora-envolvedora-2000-b'); ?>">
				<img class="myImg" src="<?= base_url('assets/img/produtos/paletizadora-envolvedora-2000-b.webp'); ?>" alt="Paletizadora/ Envolvedora 2000 B" />
				</a>
				<h6>Paletizadora/ Envolvedora 2000 B</h6> 
            </div>

            <div class="col-lg-2 col-md-6">
                <a href="<?= base_url('envolvedora-paletizadora-2000-a'); ?>">
				<img class="myImg" src="<?= base_url('assets/img/produtos/envolvedora-paletizadora-mb-2000-a.webp'); ?>" alt="Envolvedora/ Paletizadora - 2000 A" />
				</a>
				<h6>Envolvedora/ Paletizadora - 2000 A</h6> 
            </div>

            <div class="col-lg-2 col-md-6">
                <a href="<?= base_url('envolvedora-paletizadora-1000'); ?>">
				<img class="myImg" src="<?= base_url('assets/img/produtos/paletizadora-envolvedora-1000.webp'); ?>" alt="Envolvedora/ Paletizadora 1000" />
				</a>
				<h6>Envolvedora/ Paletizadora 1000</h6> 
            </div>

            <div class="col-lg-2 col-md-6">
                <a href="<?= base_url('envolvedora-mbpack-cs-1500'); ?>">
				<img class="myImg" src="<?= base_url('assets/img/produtos/envolvedora-mbpack-cs-1500.webp'); ?>" alt="Envolvedora/ Paletizadora 1000" />
				</a>
				<h6>Envolvedora MBPACK CS 1.500</h6> 
            </div>

            <div class="col-lg-2 col-md-6">
                <a href="<?= base_url('envolvedora-mbpack-ca-1500'); ?>">
				<img class="myImg" src="<?= base_url('assets/img/produtos/envolvedora-mma-ca-1500.webp'); ?>" alt="Envolvedora/ Paletizadora 1000" />
				</a>
				<h6>Envolvedora MBPACK CA 1.500</h6> 
            </div>

            <div class="col-lg-2 col-md-6">
                <a href="<?= base_url('filmes-stretch'); ?>">
				<img class="myImg" src="<?= base_url('assets/img/produtos/filme-stretch.webp'); ?>" alt="Filmes Stretch" />
				</a>
				<h6>Filmes Stretch</h6> 
            </div>

           <div class="col-lg-2 col-md-6">
                <a href="<?= base_url('polystrap'); ?>">
				<img class="myImg" src="<?= base_url('assets/img/produtos/polystrap.webp'); ?>" alt="Polystrap" />
				</a>
				<h6>Polystrap</h6>  
            </div>
       </div>
        
            <div class="row">
            <div class="col-lg-2 col-md-6">
                <a href="<?= base_url('selo-pp'); ?>">
				<img class="myImg" src="<?= base_url('assets/img/produtos/selo-pp.webp'); ?>" alt="Selo PP" />
				</a>
				<h6>Selo PP</h6>  
            </div>
           <div class="col-lg-2 col-md-6">
                <a href="<?= base_url('selo-tr-fita-aco'); ?>">
				<img class="myImg" src="<?= base_url('assets/img/produtos/selo-tr.webp'); ?>" alt="Selo TR para Fita de Aço" />
				</a>
				<h6>Selo TR para Fita de Aço</h6> 
            </div>
            <div class="col-lg-2 col-md-6">
                <a href="<?= base_url('maquina-automatica-dba'); ?>">
				<img class="myImg" src="<?= base_url('assets/img/produtos/maquina-automatica-dba.webp'); ?>" alt="Máquina Automática DBA" />
				</a>
				<h6>Máquina Automática DBA</h6> 
            </div>
            <div class="col-lg-2 col-md-6">
                <a href="<?= base_url('maquina-semiautomatica-polimax-tp201'); ?>">
				<img class="myImg" src="<?= base_url('assets/img/produtos/maquina-semiautomatica-polimax-tp201.webp'); ?>" alt="Máquina Semiautomática TP201" />
				</a>
				<h6>Máquina Semiautomática TP201</h6> 
            </div>
            <div class="col-lg-2 col-md-6">
                 <a href="<?= base_url('aplicadora-filme-stretch'); ?>">
				<img class="myImg" src="<?= base_url('assets/img/produtos/Aplicadora-De-Filme-Stretch.webp'); ?>" alt="Aplicadora Filme Stretch" />
				</a>
				<h6>Aplicadora Filme Stretch</h6> 
            </div>
            <div class="col-lg-2 col-md-6">
                <a href="<?= base_url('fitas-adesivas'); ?>">
				<img class="myImg" src="<?= base_url('assets/img/produtos/fitas-adesivas.webp'); ?>" alt="Fitas Adesivas" />
				</a>
				<h6>Fitas Adesivas</h6> 
            </div>
        </div>

        <div class="row">
        <div class="col-lg-2 col-md-6">
                 <a href="<?= base_url('selo-pet'); ?>">
				<img class="myImg" src="<?= base_url('assets/img/produtos/selo-pet.webp'); ?>" alt="Selo PET" />
				</a>
				<h6>Selo PET</h6> 
            </div>
            <div class="col-lg-2 col-md-6">
                <a href="<?= base_url('fitilho-comum'); ?>">
				<img class="myImg" src="<?= base_url('assets/img/produtos/fitilho-comum.webp'); ?>" alt="Fitilho Comum" />
				</a>
				<h6>Fitilho Comum</h6> 
            </div>
            <div class="col-lg-2 col-md-6">
                <a href="<?= base_url('bateria-h45'); ?>">
				<img class="myImg" src="<?= base_url('assets/img/produtos/bateria-h45.webp'); ?>" alt="Bateria H45" />
				</a>
				<h6>Bateria H-45</h6> 
            </div>
    
            <div class="col-lg-2 col-md-6">
                <a href="<?= base_url('conjunto-pet'); ?>">
				<img class="myImg" src="<?= base_url('assets/img/produtos/conjunto-pet.webp'); ?>" alt="Conjunto PET" />
				</a>
				<h6>Conjunto PET</h6> 
            </div>
        </div>
</section>
<!-- Start contact-page Area -->


<!-- End contact-page Area -->

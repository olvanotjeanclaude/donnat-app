<div class="section" id="service">
    <div class="container-fluid">
        <div class="row section-content">
            <div class="col-lg-4">
                <div class="row">
                    <div class="section-title pt-4   pt-sm-0">
                        <h2 class="title-1">what</h2>
                        <h2 class="title-2">we do <span class="point">.</span></h2>
                        <h2 class="title-3">Building digital solutions for you. <span class="point">.</span> </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="service-body">
                        <p>
                            Tout pour réussir votre révolution numérique : PULSE regroupe des équipes pluridisciplinaires et l’ensemble des métiers
                            de la transformation digitale que les organisations doivent mener en interne pour réussir leur évolution et se préparer
                            à l’avenir numérique : audit, conseil & expertise, design UX/UI, développement web, d’applications mobiles et de
                            solutions métiers, support & maintenance, office automation, sécurité des données… Nous favorisons l’approche
                            collaborative et l’intelligence collective pour construire avec vous et transformer votre idée, en concept puis en
                            prototype pour finalement construire avec vous une solution digitale viable et adaptée aux besoins de vos clients et de
                            votre entreprise, tout en offrant une expérience différenciante, attrayante et mémorable.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row our-service-item" id="conseil">
                    <div class="col-sm-3">
                        <div class="left-service">
                            <h5 class="service-title">audit & conseil</h5>
                            <button class="btn btn-outline-light my-4">decouvrir</button>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="right-service">
                            <p> Les équipes PULSE vous accompagnent tout au long de votre projet pour comprendre vos besoins et ceux de vos clients,
                            définir ensemble le périmètre projet et faire évoluer votre idée initiale vers une solution digitale innovante et
                            ambitieuse en apportant notre expertise pour vous assister dans les choix fonctionnels, organisationnels et
                            technologiques. </p>
                        </div>
                    </div>
               </div>

               <div class="row our-service-item" id="design">
                    <div class="col-sm-3">
                        <div class="left-service">
                            <h5 class="service-title">audit & conseil</h5>
                            <button class="btn btn-outline-light my-4">decouvrir</button>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="right-service">
                            <p> Les équipes PULSE vous accompagnent tout au long de votre projet pour comprendre vos besoins et ceux de vos clients,
                            définir ensemble le périmètre projet et faire évoluer votre idée initiale vers une solution digitale innovante et
                            ambitieuse en apportant notre expertise pour vous assister dans les choix fonctionnels, organisationnels et
                            technologiques. </p>
                        </div>
                    </div>
                </div>
                <div class="row our-service-item" id="service-it">
                    <div class="col-sm-3">
                        <div class="left-service">
                            <h5 class="service-title">service it</h5>
                            <button class="btn btn-outline-light my-4">decouvrir</button>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="right-service">
                            <p> Les équipes PULSE vous accompagnent tout au long de votre projet pour comprendre vos besoins et ceux de
                                vos clients, définir ensemble le périmètre projet et faire évoluer votre idée initiale vers une solution
                                digitale innovante et ambitieuse en apportant notre expertise pour vous assister dans les choix
                                fonctionnels, organisationnels et technologiques. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
    </div>
</div>

<style>
    .our-service-item#conseil{
        padding-top: 90px;
    }
    .our-service-item .btn-outline-light{
         text-transform: uppercase;
         background: transparent;
         color: #fff;
         opacity: .6;
    }
    .our-service-item .btn-outline-light:hover{
        opacity: 1;
    }
    .our-service-item{
        position: relative;
        padding: 2rem 1rem;
        color: #fff;
        z-index: 1000;
        background-position: center; 
        background-size: cover;
    }
   
    .our-service-item::after{
        content: "";
         position: absolute; 
         top: 0;
        left: 0;
        background-color: rgba(0,0,0,0.7);
        width: 100%; 
        height: 100%; 
        z-index: -1; 
        transition: all 1s;
    }

    .left-service{
        text-transform: uppercase;
        font-size: 13px;
    }
    .right-service{
        padding-right: 1.5rem;
    }
    
    #conseil{
        background-image: url('image/computer-1.jpg');
    }
    #design{
         background-image: url('image/computer-2.jpg'); 
    }
    #service-it{ 
        background-image: url('image/computer-3.jpeg');
     }
    .service-title{
        font-weight: 700;
        text-transform: uppercase;
    }

</style>
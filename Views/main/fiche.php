

<div class="boxed_wrapper">



 

<div class="inner-banner has-base-color-overlay text-center" style="background: url(<?= URLROOT ?>assets/images/background/4.jpg);">
    <div class="container">
        <div class="box">
            <h1>Causes grid view</h1>
        </div>
    </div>
</div>
<div class="breadcumb-wrapper">
    <div class="container">
        <div class="pull-left">
            <ul class="list-inline link-list">
                <li>
                    <a href="<?= URLROOT ?>">Acceuil</a>
                </li>
                
            </ul>
        </div>
        <div class="pull-right">
            <a href="<?= URLROOT ?>login/register" class="get-qoute"><i class="fa fa-arrow-circle-right">Devenur vonlotaire</i></a>
        </div>
    </div>
</div>


<section class="urgent-cause2 sec-padd">
    <div class="container">

        <div class="row">


        <?php 
        foreach($orphelins as $lis): ?>
            <article class="item col-md-4 col-sm-6 col-xs-12">
                <figure class="img-box">
                    <img style="height: 250px ; width: 350px" src="<?= URLROOT ?>uploads/img/<?=$lis->profilpic ?>" alt="">
                    <div class="overlay"><div class="inner-box"><div class="content-box"><button class="thm-btn style-2 donate-box-btn">Effecture un dont</button></div></div></div>
                </figure>
                
                <div class="content">
                    
                    <div class="text center">
                        <a href="<?= URLROOT ?>main/fide/<?= $lis->id ?>"><h4 class="title"><?= ucfirst($lis->prenom.' '. $lis->nom)  ?></h4></a>
                        <p><?= tronque_chaine($lis->description_dont, 155) ?></p>               
                    </div>
                    <div class="progress-box">
                        <div class="bar">
                            <div class="bar-inner animated-bar" data-percent="48%"><div class="count-text">48%</div></div>
                        </div>
                    </div>
                   
                    
                </div>                        
                        
            </article>
       <?php endforeach ?>
          
            
        </div>
        <ul class="page_pagination center">
            <li><a href="#" class="tran3s"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
            <li><a href="#" class="active tran3s">1</a></li>
            <li><a href="#" class="tran3s">2</a></li>
            <li><a href="#" class="tran3s"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</section>


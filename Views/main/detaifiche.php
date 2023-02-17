
<div class="inner-banner has-base-color-overlay text-center" style="background: url(<?= URLROOT ?>assets/images/background/4.jpg);">
    <div class="container">
        <div class="box">
            <h1> <?= ucfirst($orphelins->prenom.' '.$orphelins->nom)  ?></h1>
        </div>
    </div>
</div>
<div class="breadcumb-wrapper">
  
</div>


<div class="breadcumb-wrapper">
    <div class="container">
        <div class="pull-left">
            <ul class="list-inline link-list">
                <li>
                    <a href="<?= URLROOT ?>">Home</a>
                </li>
               

                <li>
                    <?= ucfirst($orphelins->prenom.' '.$orphelins->nom)  ?>
                </li>
            </ul>
        </div>
        <div class="pull-right">
            <a href="<?= URLROOT ?>login/register" class="get-qoute"><i class="fa fa-arrow-circle-right"></i>Devenir volontaire</a>
        </div>
    </div>
</div>

<section class="style-2">
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="cause-area urgent-cause2 single-cause cause-list-bg sec-padd">
                    <articel class="item clearfix">
                        <figure class="img-box">
                            <img src="<?= URLROOT ?>uploads/img/<?=$orphelins->profilpic ?>" alt="">                       
                        </figure>
                        
                        <div class="content">
                            <div class="donate"><span> Nom: </span>
                            <?= ucfirst($orphelins->prenom.' '.$orphelins->nom)  ?> 
                            <br> <span>Genre: <?= $orphelins->genre ?> </span><br> Date naissance : <?= $orphelins->date_naisse ?>
                        <br> Lieu naissance: <?= $orphelins->lieu_naissance ?></div>
                            <br>

                           
                            
                        </div>                        
                                
                    </articel><br><br>

                    <div class="section-title">
                        <h2>Cause <span class="thm-color">Description</span></h2>
                    </div>
                    <div class="text">
                        <p> <?= $orphelins->description_dont ?> </p>
                    </div><br><br>
                 



                </div>
                    

            </div>
                
        </div>
        
    </div>
</section>

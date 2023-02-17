
  

    <div class="main-content">

  

<div class="container mt--8 pb-5" style="width: 100%; padding:7%">
<img src="<?= URLROOT ?>assets/images/slider/1.jpg" style="position:absolute; right:0; height:100vh" />

    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
            <div class="card bg-secondary border-0 mb-0" >
                <a href="<?= URLROOT ?>admin" class="btn btn-primary " style="margin: 3%;">Retour</a>
                
               
                <div class="card-body px-lg-5 py-lg-5">
                
                    <div class="text-center text-muted mb-4">

                   
                        <small>Ajouter un orphelin</small>

                    </div>
                    <form id="form-submit" data-url="<?= URLROOT ?>admin/save" role="form">


               
                  <div class="form-group">
                    <label class=" text-white">Nom </label>
                    <input class="form-control" name="nom" type="text" required placeholder="Nom ">
                  </div>
                  <div class="form-group">
                    <label class=" text-white">Prenom </label>
                    <input class="form-control" name="prenom" type="text" required placeholder="Prenom ">
                  </div>
                  <div class="form-group">
                    <label class=" text-white">Genre</label>
                     <select name="genre" id="" class="form-control">
                        <option >Homme</option>
                        <option >Femme</option>
                     </select>
                  </div>
                  <div class="form-group">
                    <label class=" text-white">Date naissance</label>
                    <input class="form-control" name="date"  type="date" required placeholder="">
                  </div>

                  <div class="form-group">
                    <label class=" text-white">Lieux naissance</label>
                    <input class="form-control" name="lieu"  type="text" required placeholder="lieu ici">
                  </div>

                  <div class="form-group">
                    <label class=" text-white">Image de l'orphelin</label>
                    <input class="form-control" name="image"  type="file" required >
                  </div>

                  <div class="form-group">
                    <label class=" text-white">Déscription </label>
                   <textarea name="descr" id="" cols="30" placeholder="Decriver les raisons pour les quelles l'enfant a éte admis, et pour permettre aux volotaires de faire des dont " rows="10" class="form-control"></textarea>
                  </div>


                   <div id="result"></div>
                  <div class="card-footer">
                <button type="submit" id="btn-save" data-text="save" data-before="Saving..." class="btn btn-primary btn-pill">Enregistrer</button>
                
              </div>
                 
                    </form>
                </div>
            </div>
       
        </div>
    </div>
</div>
</div>





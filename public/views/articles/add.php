<?php ob_start(); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="<?= url('add') ?>" method="post">

                <div class="form-group">
                    <label for="">Titre</label>
                    <input name="title" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Auteur</label>
                    <input name="author" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Date</label>
                    <input name="createdAt" type="date" class="form-control">   
                </div>
                

                <div class="form-group">
                    <label for="">Contenu</label>
                    <textarea name="content" id="" cols="70" rows="10" class="form-control"></textarea>
                </div>

                <button class="btn btn-primary float-right">Publier un nouvel article</button>

            </form>
        </div>
    </div>
</div>


<?php $content = ob_get_clean() ?>
<?php view('template', compact('content')); ?>
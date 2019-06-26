<?php ob_start(); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="<?= url('add') ?>" method="post">

                <div class="form-group">
                    <label for="title">Titre</label>
                    <input name="title" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="author">Auteur</label>
                    <input name="author" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="created_at">Date</label>
                    <input name="created_at" type="date" class="form-control">   
                </div>
                

                <div class="form-group">
                    <label for="content">Contenu</label>
                    <textarea name="content" id="content" cols="70" rows="10" class="form-control"></textarea>
                </div>

                <button class="btn btn-primary float-right">Publier un nouvel article</button>

            </form>
        </div>
    </div>
</div>


<?php $content = ob_get_clean() ?>
<?php view('template', compact('content')); ?>
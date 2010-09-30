<?php $view->extend('::layout.php') ?>

<?php $view->get('slots')->set('head.title', 'Contact form'); ?>
<?php $view->get('slots')->set('menu.active', 'contact'); ?>

<div class="page-content">
    <h1>Contact form</h1>
    <?php echo $form->renderFormTag($view->get('router')->generate('ContactBundle_Message_Save')); ?>
        <?php echo $form['name']->render(); ?>
        <?php echo $form['email']->render(); ?>
        <?php echo $form['subject']->render(); ?>
        <?php echo $form['body']->render(); ?>
    <?php echo '</form>'; ?>
</div>
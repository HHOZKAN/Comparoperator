<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/TpComparator/Comparoperator/config/database.php'); ?>

<form action="./utils/insertCommentaire.php" method="post">
<input type="hidden" name="tour_operator_id" value="<?php echo $operator->getId(); ?>">
    
    <label for="message">Votre commentaire :</label>
    <textarea name="message" rows="4" required></textarea><br>

    <label for="author_name">Nom de l'auteur :</label>
    <input type="text" name="author_name" required><br>

    <input type="submit" name="submit" value="Ajouter le commentaire">
</form>

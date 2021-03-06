<ul class="repo-list clickable-list">
<?php foreach($repos as $repo): ?>
    <li class="item">
        <span class="score"><?php echo $repo->getScore() ?></span>
        <a class="item-link" href="<?php echo $view['router']->generate('repo_show', array('username' => $repo->getUsername(), 'name' => $repo->getName())) ?>">
            <img class="gravatar" src="<?php echo $view['assets']->getUrl('bundles/s2b/images/application32.png') ?>" />
            <?php echo $repo->getName() ?><em><?php echo $repo->getLastTagName() ?></em>
        </a>
        <span class="description"><?php echo $repo->getDescription() ?></span>
    </li>
<?php endforeach; ?>
</ul>

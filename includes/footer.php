<footer class="footer">
    <div class="container footer__inner">
        <span>&copy; <?= date('Y') ?> <?= htmlspecialchars($site['name']) ?> · <?= t('footer.rights') ?></span>
        <span><a href="mailto:<?= $site['email'] ?>"><?= $site['email'] ?></a></span>
    </div>
</footer>
</body>
</html>

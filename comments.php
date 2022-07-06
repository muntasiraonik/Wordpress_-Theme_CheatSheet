# Declare Disqus Shortcode here
<?php $disqus_shortname = ""; ?>

# Required
<div id="disqus_thread"></div>

# Lazyloading Disqus JS
<script>
    let disqus_loaded = false;
    document.addEventListener("scroll", () => {
        if (window.scrollY >= 400 && disqus_loaded === false) {
            var disqus_config = function() {
                this.page.url = "<?= wp_get_canonical_url(); ?>";
                this.page.identifier = <?= get_the_ID(); ?>;
            };
            (function() {
                var d = document,
                    s = d.createElement('script');

                s.src = 'https://<?= $disqus_shortname ?>.disqus.com/embed.js';

                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();

            disqus_loaded = true;
        }
    })
</script>
<noscript>
    Please enable JavaScript to view the
    <a href="https://disqus.com/?ref_noscript" rel="nofollow">
        comments powered by Disqus.
    </a>
</noscript>
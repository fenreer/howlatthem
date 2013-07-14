  </div>
  <div id="footer-main" class="row">
  <footer>
    <div id="footer-above-sidebar" class="span12 sidebar">
    <? if (dynamic_sidebar ('footer-above-sidebar')): else : endif; ?>
    </div>
    <div id="footer-block-1" class="span3 sidebar">
    <? if (dynamic_sidebar ('footer-block-1')): else : endif; ?>
    </div>
    <div id="footer-block-2" class="span3 sidebar">
    <? if (dynamic_sidebar ('footer-block-2')): else : endif; ?>
    </div>
    <div id="footer-block-3" class="span3 sidebar">
    <? if (dynamic_sidebar ('footer-block-3')): else : endif; ?>
    </div>
    <div id="footer-block-4" class="span3 sidebar">
    <? if (dynamic_sidebar ('footer-block-4')): else : endif; ?>
    </div>
    <div id="footer-below-sidebar" class="span12 sidebar">
    <? if (dynamic_sidebar ('footer-below-sidebar')): else : endif; ?>
    </div>
  </footer>
</div><!-- .container -->
<? wp_footer (); ?>
</body>
</html>
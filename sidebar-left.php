<div id="sidebar2" class="sidebar" role="complementary">

  <h2>PIC Lab</h2>

  <?php if ( is_active_sidebar( 'sidebar2' ) ) : ?>

    <?php dynamic_sidebar( 'sidebar2' ); ?>

  <?php else : ?>

  <!-- This content shows up if there are no widgets defined in the backend. -->
            
  <div class="alert help">
    <p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
  </div>

  <?php endif; ?>

</div>

<div id="sidebar1" class="sidebar" role="complementary">

  <h2>About PIC</h2>

  <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

    <?php dynamic_sidebar( 'sidebar1' ); ?>

  <?php else : ?>

  <!-- This content shows up if there are no widgets defined in the backend. -->
            
  <div class="alert help">
    <p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
  </div>

  <?php endif; ?>

</div>
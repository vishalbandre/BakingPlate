
  <!-- todo: make this configurable bootstrap|db only if admin? whats the best
            it needs to use html->script and find in theme
	yui profiler and profileviewer - remove for production -->
  <script src="/h5bp/js/profiling/yahoo-profiling.min.js"></script>
  <script src="/h5bp/js/profiling/config.js"></script>
  <?php
	  // no point in compressing this
	  echo $this->Html->script('libs/modernizr-1.6.min.js')
  ?>
  <!-- end profiling code -->
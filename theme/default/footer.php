 </div>
</div>
<div id="tree" class="" style="position:fixed; top:0; right: 0;;float:left;min-height:20000px;height:100%; background: #000;">

          </div>
<div id="footer">
      <div class="container">
        <p class="muted credit">Footer Place Holder 2016</p>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo SITE_URL ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo SITE_URL ?>/assets/js/prism.js"></script>
    <script src="<?php echo SITE_URL ?>/assets/js/bootstrap-treeview.js"></script>
    <script>
    function getTree() {
  // Some logic to retrieve, or generate tree structure
  var tree = [
  {
    text: "Assets",
    tags: ["asset"]
  },
  {
    text: "Classes",
    state: {
      expanded: true
    },
    nodes: [
      {
        text: "controller.php"
      },
      {
        text: "view.php"
      }
    ]
  },
  {
    text: "Core",
    state: {
      expanded: true
    },
    nodes: [
      {
        text: "Controllers",
        state: {
          expanded: true
        },
        nodes: [
          {
            text: "controller.about.php"
          },
          {
            text: "controller_index.php"
          },
          {
            text: "controller_oopatterns.php"
          }
        ]
      },
      {
        text: "Models"
      },
      {
        text: "Views",
        state: {
          expanded: true
        },
        nodes: [
          {
            text: "adapter.php"
          },
          {
            text: "factory.php"
          },
          {
            text: "index.php"
          },
          {
            text: "lawofdemeter.php"
          },
          {
            text: "polymorphism.php"
          },
          {
            text: "singleton.php"
          },
          {
            text: "traits.php"
          }

        ]
      },
      {
        text: "application.php"
      }
    ]
  },
  {
    text: "index.php"
  },

];
  return tree;
}

$('#tree').treeview({data: getTree()});
</script>

  </body>
</html>

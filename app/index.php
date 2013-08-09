

<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>

    <section class="base">
      <ul id="food-list">
      </ul>
    </section><!-- /.base -->


    <script id="food-data" type="text/x-handlebars-template">
      {{#foods}}
        {{#ifCond locations.nyc.months 7}}
          <li class="{{type}} clearfix">
            <a href="#">
              <h2>{{title}}</h2>
              <!-- <span class="right icon {{icon}}"></span> -->
              {{#if description}}
              <div class="more-info">
                {{#if icon}}<span class="icon {{icon}}"></span>{{/if}}
                {{#if description}}<p><strong>Check ripeness: </strong>{{description}}</p> {{/if}}
                {{#if source}}<p class="source"><strong>Source: </strong> {{source}}</p>{{/if}}
                {{#if iconSource}}<p class="source">{{iconSource}}</p>{{/if}}
              </div>
              {{/if}}
            </a>
          </li>

        {{/ifCond}}
      {{/foods}}
    </script>

    <script>
    var json = null

    $.getJSON('/json/fv.json', function(data) {
      Handlebars.registerHelper('ifCond', function(v1, v2, options) {
        if($.inArray(v2, v1) != -1)
          {
            return options.fn(this);
          }
      return options.inverse(this);
      });
      console.log( 'json loaded' );
      // Put JSON into variable
      json = data;

      // Create variable based on the handlebars template above
      var source = $('#food-data').html();

      // compile the template
      var template = Handlebars.compile(source);

      // Send that to the page
      $('#food-list').html(template(json));
      moreInfo();
      packery();
    });
    </script>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $(".comp").children("circle").attr({
      r: "10",
      cx: "50",
      cy: "15"
    });
    $(".comp").children(".cur").attr({
      x1: "0",
      x2: "50",
      y1: "15",
      y2: "15"
    });
    $(".comp").children(".nxt").attr({
      x1: "50",
      x2: "100",
      y1: "15",
      y2: "15"
    });
    $(".comp").children(".num").attr({
      x: "49",
      y: "17"
    });
    $(".comp").children(".name").attr({
      x: "50%",
      y: "35"
    });

    $(".active").children("circle").attr({
      r: "12",
      cx: "80",
      cy: "15"
    });
    $(".active").children(".cur").attr({
      x1: "0",
      x2: "80",
      y1: "15",
      y2: "15"
    });
    $(".active").children(".nxt").attr({
      x1: "80",
      x2: "160",
      y1: "15",
      y2: "15"
    });
    $(".active").children(".num").attr({
      x: "50%",
      y: "17"
    });
    $(".active").children(".name").attr({
      x: "50%",
      y: "55"
    });

    $(".uncom").children("circle").attr({
      r: "10",
      cx: "50",
      cy: "15"
    });
    $(".uncom").children(".cur").attr({
      x1: "0",
      x2: "50",
      y1: "15",
      y2: "15"
    });
    $(".uncom").children(".nxt").attr({
      x1: "50",
      x2: "100",
      y1: "15",
      y2: "15"
    });
    $(".uncom").children(".num").attr({
      x: "49",
      y: "17"
    });
    $(".uncom").children(".name").attr({
      x: "50%",
      y: "35"
    });
    $(".un").children("line").attr({
       x1: "0",
      x2: "500",
      y1: "15",
      y2: "15"
    });

    var WindowsSize=function(){
        var h=$(window).height(),
            w=$(window).width();
            if(w>=800 && w<=1280){
            $(".un").css("width",((w-800)+140)/2);
            }
            else if(w<800){
              $(".un").css("width",70);
            }
            else if(w>1280){
              $(".un").css("width",310);
            }
    };
   $(document).ready(WindowsSize); 
   $(window).resize(WindowsSize);
   
  });
</script>

<nav class="head-nav" style="width:100%;">
  <svg class="un" >
    <line style="stroke:#03a871;stroke-width:6;" />
</svg>

      <!--    SVG    1    -->
      <svg class="<?php if ($page == 1) {
                    echo "active";
                  } else if ($page > 1) {
                    echo "comp";
                  } else {
                    echo "uncom";
                  } ?>">
        <line id="first_line" class="cur" />
        <line class="nxt" />
        <circle />

        <text class="num" text-anchor="middle" alignment-baseline="middle" text-anchor="middle">
          1
        </text>

        <text class="name" alignment-baseline="middle" text-anchor="middle">
          REGISTER
        </text>
      </svg>

      <!--    SVG   2    -->
      <svg class="<?php if ($page == 2) {
                    echo "active";
                  } else if ($page > 2) {
                    echo "comp";
                  } else {
                    echo "uncom";
                  } ?>">
        <line class="cur" />
        <line class="nxt" />

        <circle />

        <text class="num" text-anchor="middle" alignment-baseline="middle">
          2
        </text>
        <text class="name" dominant-baseline="middle" text-anchor="middle">
          PERSONAL INFO
        </text>
      </svg>


      <!--    SVG   3    -->
      <svg class=" <?php if ($page == 3) {
                      echo "active";
                    } else if ($page > 3) {
                      echo "comp";
                    } else {
                      echo "uncom";
                    } ?>">
        <line class="cur" />
        <line class="nxt" />

        <circle />

        <text class="num" text-anchor="middle" alignment-baseline="middle">
          3
        </text>
        <text class="name" alignment-baseline="middle" text-anchor="middle">
          QUALIFICATION
        </text>
      </svg>

      <!--    SVG   4    -->
      <svg class="<?php if ($page == 4) {
                    echo "active";
                  } else if ($page > 4) {
                    echo "comp";
                  } else {
                    echo "uncom";
                  } ?>">
        <line class="cur" />
        <line class="nxt" />

        <circle />

        <text class="num" text-anchor="middle" alignment-baseline="middle">
          4
        </text>
        <text class="name" alignment-baseline="middle" text-anchor="middle">
          WORK DONE
        </text>
      </svg>

        <!--    SVG   5    -->
        <svg class=" <?php if ($page == 5) {
                      echo "active";
                    } else if ($page > 5) {
                      echo "comp";
                    } else {
                      echo "uncom";
                    } ?>">
          <line class="cur" />
          <line class="nxt" />

          <circle />

          <text class="num" text-anchor="middle" alignment-baseline="middle">
            5
          </text>
          <text class="name" alignment-baseline="middle" text-anchor="middle"">
            DECLARATION
          </text>
        </svg>

        <!--    SVG   6    -->
        <svg class=" <?php if ($page == 6) {
                        echo "active";
                      } else if ($page > 6) {
                        echo "comp";
                      } else {
                        echo "uncom";
                      } ?>">
            <line class="cur" />
            <line class="nxt" />

            <circle />

            <text class="num" text-anchor="middle" alignment-baseline="middle">
              6
            </text>
            <text class="name" alignment-baseline="middle" text-anchor="middle"">
            FINAL CHECK
          </text>
        </svg>
        <svg class="un" >
              <line style="stroke:#9dc3ec;stroke-width:6;" />
      </svg>
    </nav>
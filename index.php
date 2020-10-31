<!doctype html>
<html>

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="scripts.js"></script>
    <link rel="stylesheet" href="main.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:100,400,700' rel='stylesheet' type='text/css'>

<body>

    <nav class="navigation" id="mainNav">
        <h3>This Week Feeling Is...</h3>
        <!-- <a class="navigation__link" href="#1">Section 1</a>
        <a class="navigation__link" href="#2">Section 2</a> -->

    </nav>
    <div id="item-section">
        <!-- <div class="page-section" id="1">
            <h2>Section 1</h2>
        </div>
        <div class="page-section" id="2">
            <h2>Section Two</h2>
        </div> -->
    </div>
    <script>
        data = {
            "sections": [
                {
                    "item_id": "1",
                    "item_title": "Drowning Reflection",
                    "item_content": "Infinity of the Moment",
                    "image_preview": "preview\\reflectiondrowning-preview.jpg",
                    "sample_link": "https://virink.com/art/1247424",
                    "sketch_link": "",
                    "interactive_link": "",
                    "comming_soon": false

                }, {
                    "item_id": "2",
                    "item_title": "Mysterious and Dark sides of Hecate",
                    "item_content": "",
                    "image_preview": "",
                    "sample_link": "",
                    "sketch_link": "",
                    "interactive_link": "",
                    "comming_soon": false
                }
            ]
        }

        for (var key in data) {
            for (var i = 0; i < data[key].length; i++) {
                var title = data[key][i].item_title;
                var id = data[key][i].item_id;
                var badge = document.createElement('a');
                badge.className = 'navigation__link';
                badge.setAttribute('href', '#' + id);

                badge.innerHTML = title;
                document.getElementById('mainNav').appendChild(badge);
            }
        }
        for (var key in data) {
            for (var i = 0; i < data[key].length; i++) {
                var status = data[key][i].comming_soon;

                var preview = data[key][i].image_preview;
                var title = data[key][i].item_title;
                var desc = data[key][i].item_content;
                var sample_link = data[key][i].sample_link;
                var sketch_link = data[key][i].sketch_link;
                var interactive_link = data[key][i].interactive_link;
                var id = data[key][i].item_id;
                var div = document.createElement('div');
                div.className = 'page-section';
                div.id = id;

                var inner_div = document.createElement('div');
                inner_div.className = 'inner-section';

                if (preview) {
                    preview = '<img class="image-preview" src="' + preview + '">';


                    if (sketch_link) {
                        sketch_link = '<a target="_blank" href="' + sketch_link + '">' + preview + '</a>';
                        div.innerHTML += sketch_link;
                    }

                    else {
                        div.innerHTML += preview;
                    }
                }

                if (title) {
                    title = '<h2>' + title + '</h2>';
                    inner_div.innerHTML += title;
                }

                if (desc) {
                    desc = '<p>' + desc + '</p>';
                    inner_div.innerHTML += desc;
                }

                if (status) {
                    inner_div.innerHTML += "<h3>Comming Soon</h3>";

                } else {

                    if (sample_link) {
                        sample_link = '<a target="_blank" href="' + sample_link + '">Sample</a>';
                        inner_div.innerHTML += sample_link;
                    }


                    if (sketch_link) {
                        sketch_link = '<a target="_blank" href="' + sketch_link + '">Sketch</a>';
                        inner_div.innerHTML += sketch_link;
                    }


                    if (interactive_link) {
                        interactive_link = '<a target="_blank" href="' + interactive_link + '">Process</a>';
                        inner_div.innerHTML += interactive_link;
                    }
                }




                document.getElementById('item-section').appendChild(div);
                div.appendChild(inner_div);
            }
        }

    </script>
</body>

</html>
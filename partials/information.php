<div class="row"  id="info">
	<div class="featured"></div>
		<div class="container">
			<div id="results" >
			</div>
		</div>
</div>
<script src="js/jquery.min.js"></script>
<script>
function CreateTableView(objArray, theme, enableHeader) {
            // set optional theme parameter
            if (theme === undefined) {
                theme = 'mediumTable'; //default theme
            }

            if (enableHeader === undefined) {
                enableHeader = true; //default enable headers
            }

            // If the returned data is an object do nothing, else try to parse
            var array = typeof objArray != 'object' ? JSON.parse(objArray) : objArray;

            var str = '<table class="' + theme + ' table table-striped table-bordered">';

            // table head
            if (enableHeader) {
                str += '<thead><tr>';
                for (var index in array[0]) {
                    str += '<th scope="col">' + index + '</th>';
                }
                str += '</tr></thead>';
            }

            // table body
            str += '<tbody>';
            for (var i = 0; i < array.length; i++) {
                str += (i % 2 == 0) ? '<tr class="alt">' : '<tr>';
                for (var index in array[i]) {
                    str += '<td>' + array[i][index] + '</td>';
                }
                str += '</tr>';
            }
            str += '</tbody>'
            str += '</table>';
            return str;
        }


        $(document).ready(function () {
            var originalData = [
            { "info": {  "id": 1, "starter": "Free","express": "$15", "enterprise": "$30"} },
            { "info": {"id": 2, "starter": 100,  "express": 5000, "enterprise": 1500} },
            { "info": { "id": 3, "starter": "Daily Limits","express": "Weekely limits", "enterprise": "No limit"} }, 
            { "info": { "id": 4, "starter": "24 / 7 Support","express": "24 / 7 Support", "enterprise": "24 / 7 Support"} }, 
        ];

            var data = $.map(originalData, function (ele) {
                return {Starter: ele.info.starter, Express: ele.info.express,  Enterprise: ele.info.enterprise };
            });

            $('#results').append(CreateTableView(data, 'lightPro', true));
        });
</script>
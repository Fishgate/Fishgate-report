

var doughnutData = [
        {
                value: 800,
                color:"#fc0" //UNOPENED
        },
        {
                value : 200,
                color : "#9fc215" //OPENED
        },
        {
                value : 24,
                color : "#f60" //BOUNCED
        },
        {
                value : 8,
                color : "#d43f3a" //INVALID EMAILS
        }
];

var myDoughnut = new Chart(document.getElementById("canvas").getContext("2d")).Doughnut(doughnutData);
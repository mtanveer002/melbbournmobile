function startIntro(){
  var intro = introJs();
    intro.setOptions({
      steps: [
        {
          element: document.querySelector('#query-results'),
          intro: "<b>Search results</b><br/><br/>This is a panel with results of your search.",
          position: "left",
        },
        {
          element: document.querySelector('#query-title'),
          intro: "<b>Results title!</b><br/><br/>This is the title of you query."
        },
        {
          element: document.querySelectorAll('#query-labels')[0],
          intro: "<b>Route labels!</b><br/></br>.These labels indicate the origin, destination and the hub (if any) of the resulting directions of your query."
        },
        {
          element: document.querySelectorAll('#quote_excel')[0],
          intro: "<b>Export to excel</b><br/><br/>Use this button to export selected rates to Microsoft Excel.<br/><br/><b>Don't forget</b>, before export you must select some or all rates displayed."
        },
        {
          element: document.querySelectorAll('#quote_export')[0],
          intro: "<b>Print a qoute</b><br/><br/>Use this button to view selected rates in page formated to print.<br/><br/><b>Don't forget</b>, before export you must select some or all rates displayed."
        },
        {
          element: document.querySelectorAll('#results-air')[0],
          intro: '<b>Table of results</b><br/><br/>This table contains the results of your query. You can select one or more rates using the checkbox to the left.<br/><br/>Use control "Show records" before this table to change the amount of tariffs on the screen and can be 5, 15, 20, 30 or all.<br/><br/>You can filter the results using the control "Search" by entering part of the service name, the route or even the total amount of the tariff.',
          position: "left",
        },
        {
          element: document.querySelectorAll('#SendTo')[0],
          intro: '<b>Send quote</b><br/><br/>Fill fields in this portlet if you want to send a quote (printed or in Excel file) to anyone. These fields are not required, if you want to indicate a person or a company, you must fill them before generate a printed or Excel quote.',
          position: "left",
        },
        {
          element: '#step7',
          intro: 'Get it, use it.'
        }
      ]
    });
    intro.start();
}

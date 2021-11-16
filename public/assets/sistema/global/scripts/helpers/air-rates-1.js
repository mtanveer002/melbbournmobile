function startIntro(){
  var intro = introJs();
    intro.setOptions({
      steps: [
        {
          intro: "<b>Welcome to Expreço!</b><br/><br/>This is a little guide to show you the features of the system. Let's start?"
        },
        {
          element: document.querySelector('#search_params'),
          intro: "<b>Search parameters!</b><br/><br/>This is the form search parameters. Type the origin, the destination and the weight to query rates on database. These parameters are required."
        },
        {
          element: document.querySelectorAll('#dims_params')[0],
          intro: "<b>Dimension parameters!</b><br/></br>Here you can type the quantity and the dimensions (HxLxW) in centimeters of your packages."
        },
        {
          element: document.querySelectorAll('#btn_plus')[0],
          intro: "<b>Add diferent packages</b><br/><br/>If you need to add packages in others dimensions, click on this button."
        },
        {
          element: document.querySelectorAll('#btn_search')[0],
          intro: "<b>Search button</b><br/><br/>Click in this button to search rates on database."
        },
        {
          element: document.querySelectorAll('#collapse-tool')[0],
          intro: "<b>Collapse / expand tool</b><br/><br/>You can collapse and expand panels using this feature."
        },
        {
          element: '#step7',
          intro: 'Get it, use it.'
        }
      ]
    });
    intro.start();
}

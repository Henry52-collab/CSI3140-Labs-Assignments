//Group1
//Group Member:   Shun Hei, Yiu   300247812
//Rui Heng, Tan   300102229
//Exercise 12.3
function processLinks()
{
   var linksList = document.links; // get the document's links
   var contents = "<ul>";

   // concatenate each link to contents
   for ( var i = 0; i < linksList.length; ++i )
   {
      var currentLink = linksList[ i ];
      contents += "<li><a href='" + currentLink.href + "'>" + 
         currentLink.innerHTML + "</li>";
   } // end for

   contents += "</ul>";
   document.getElementById( "links" ).innerHTML = contents;
} // end function processLinks

window.addEventListener( "load", processLinks, false );
$(document).ready(function myFunction() {

var linkSite = Object.freeze({
  "case_0": "https://www.aratostrio.rs/", 
  "case_1": "https://www.aratostrio.rs/index.html", 
  "case_2": "https://www.aratostrio.rs/bio.html", 
  "case_3": "https://www.aratostrio.rs/members.html", 
  "case_4": "https://www.aratostrio.rs/videogallery.html", 
  "case_5": "https://www.aratostrio.rs/photogallery.html", 
  "case_6": "https://www.aratostrio.rs/concerts.html", 
  "case_7": "https://www.aratostrio.rs/repertoire.html", 
  "case_8": "https://www.aratostrio.rs/contact.html", 
  "case_9": "https://www.aratostrio.rs/terms_of_use.html", 

  "case_10": "https://www.aratostrio.rs/index_en.html", 
  "case_11": "https://www.aratostrio.rs/index_en.html", 
  "case_12": "https://www.aratostrio.rs/bio_en.html", 
  "case_13": "https://www.aratostrio.rs/members_en.html", 
  "case_14": "https://www.aratostrio.rs/videogallery_en.html", 
  "case_15": "https://www.aratostrio.rs/photogallery_en.html", 
  "case_16": "https://www.aratostrio.rs/concerts_en.html", 
  "case_17": "https://www.aratostrio.rs/repertoire_en.html", 
  "case_18": "https://www.aratostrio.rs/contact_en.html", 
  "case_19": "https://www.aratostrio.rs/terms_of_use_en.html",  
});

  document.getElementById("sr_en").onclick = function () {
    var link = window.location.href;
    var string;
    var number;
    var case_no;
    Object.keys(linkSite).some(function (i) {
      if (linkSite[i] === link) {
        link = i;
          if(link.length === 6) {
            string = link.slice(-1);
            number = 10 + parseInt(string, 10);
            case_no = "case_" + number; 
          } else if (link.length === 7) {
            string = link.slice(-2);
            number = parseInt(string, 10) - 10;
            case_no = "case_" + number; 
          } 
          window.location.href = linkSite[case_no];
      return true;
      }
    })
  }
});


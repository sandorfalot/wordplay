<!DOCTYPE html>
<html lang="en">
<head>
  <title>SanZorb's Fun With Words</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <style>
    
      /* unvisited link */
a:link {
  color: #cccccc;
}

/* visited link */
a:visited {
  color:  #ddccff;
}

/* mouse over link */
a:hover {
  color: #99ccff;
}

/* selected link */
a:active {
  color: #9900cc;
}
  </style>
</head>
<body>

<div class="jumbotron text-center shadow bg-info text-light">
  <h1 class="display-4">On The Tip Of Your Tongue</h1>
  <div class="row" id="3form">
      <div class="col-sm-2">&nbsp;</div><!--blank left -->
<div class="col-sm-8"> <p>
         <form onSubmit="return process()"> 
       
             <script>
   
</script>
    <div class="form-group">
     
       <label for="searchword">Enter your word</label>

         
  <div class="input-group mb-3 input-group-sm shadow">

    <input type="text" class="form-control" id="searchword" name="searchword" type="search" class="search-input js-search-input" autofocus>
  </div>

     
    
      <label for="sel2">Select how you'd like to find your word</label>
      <select multiple class="form-control shadow" id="sel2" name="sel2">
        <option id="words?ml" value="words?ml" name="words?ml">Means Like</option>
               <option id="words?sl" value="words?sl" name="words?sl">Sounds Like</option>
        <option id="words?sp" value="words?sp" name="words?sp">Spelled Like</option>
        <option id="words?rel_jja" value="words?rel_jja" name="words?rel_jja">Popular Nouns</option>
        <option id="words?rel_jjb" value="words?rel_jjb" name="words?rel_jjb">Popular Adjectives</option>
        <option id="words?rel_syn" value="words?rel_syn" name="words?rel_syn">Synonyms</option>
        <option id="words?rel_trg" value="words?rel_trg" name="words?rel_trg">Trigger Words</option>
        <option id="words?rel_ant" value="words?rel_ant" name="words?rel_ant">Antonyms</option>
        <option id="words?rel_spc" value="words?rel_spc" name="words?rel_spc">Kind Of</option>
        <option id="words?rel_gen" value="words?rel_gen" name="words?rel_gen">More General Than</option>
        <option id="words?rel_com" value="words?rel_com" name="words?rel_com">Comrpises</option>
        <option id="words?rel_par" value="words?rel_par" name="words?rel_par">Part Of</option>
        <option id="words?rel_bga" value="words?rel_bga" name="words?rel_bga">Frequent Followers</option>
        <option id="words?rel_bgb" value="words?rel_bgb" name="words?rel_bgb">Frequent predecessors</option>
        <option id="words?rel_rhy" value="words?rel_rhy" name="words?rel_rhy">Rhymes</option>
        <option id="words?rel_nry" value="words?rel_nry" name="words?rel_nry">Almost Rhymes</option>
        <option id="words?rel_hom" value="words?rel_hom" name="words?rel_hom">Homophones</option>
        <option id="words?rel_bgb" value="words?rel_bgb" name="words?rel_bgb">Frequent predecessors</option>
         <option id="topics" value="topics" name="topics">Topics</option>
                <option id="sug?s" value="sug?s" name="sug?s">Suggestions</option>

                <option id="con" value="con" name="con">Consonant match
</option>

      </select>
    </div>
         <!--- test ajax -->
      <button type="submit" id="ajaxButton" class="btn btn-light text-info btn-block shadow">Submit</button>

</form>
 </p></div><!-- end col sm 8 -->
 <div id="tester p-4"></div>

       <div class="col-sm-2">&nbsp;</div><!--blank right -->
 </div><!-- end 3form row -->
</div>
    
    <div class="container">
        <div class="card shadow m-3">
  <div class="card-header shadow"><h3>                    Example: Words that rhyme with "forgetful"
</h3></div>
  <div class="card-body"> <h4 class="p-3" id="div1">
        </h4></div>
 
</div>
        
       
        <div id="word" class="m-2 p-3"></div>


<div class="row">
    <div class="container">
         <table class="table table-hover table-bordered table-striped shadow table-responsive">
   <thead class="shadow table-light rounded-lg">
       <tr><th colspan="2">        <h2 class="p-2">Definitions</h2></th></tr>
   </thead>
    <tbody>
      <tr>
        <td><h5>Means Like</h5></td>
        <td>Means like constraint: require that the results have a meaning related to this string value, which can be any word or sequence of words. </td>
    
      </tr>
      <tr>
        <td><h5>Sounds Like</h5></td>
        <td>Sounds like constraint: require that the results are pronounced similarly to this string of characters. (If the string of characters doesn't have a known pronunciation, the system will make its best guess using a text-to-phonemes algorithm.)</td>
     
      </tr>
      <tr>
        <td><h5>Spelled Like</h5></td>
        <td>Spelled like constraint: require that the results are spelled similarly to this string of characters, or that they match this wildcard pattern. A pattern can include any combination of alphanumeric characters, spaces, and two reserved characters that represent placeholders — * (which matches any number of characters) and ? (which matches exactly one character).</td>
  
      </tr>
      <tr>
          <td><h5>Related words</h5></td>
          <td>Related word constraints: require that the results, when paired with the word in this parameter, are in a predefined lexical relation indicated by [code]. Any number of these parameters may be specified any number of times. An assortment of semantic, phonetic, and corpus-statistics-based relations are available. At this time, these relations are available for English-language vocabularies only.</td>
      </tr>
      <tr>
          <td>
            <h6>Popular nouns</h6>  
          </td>
          <td>
            Popular nouns modified by the given adjective, per Google Books Ngrams	gradual → increase  
          </td>
      </tr>
       <tr>
          <td>
            <h6>Popular adjectives</h6>  
          </td>
          <td>
              Popular adjectives used to modify the given noun, per Google Books Ngrams	beach → sandy
          </td>
      </tr>
       <tr>
          <td>
            <h6>Synonyms</h6>  
          </td>
          <td>
              	Synonyms (words contained within the same WordNet synset)	ocean → sea

          </td>
      </tr>
       <tr>
          <td>
            <h6>Triggers</h6>  
          </td>
          <td>
            "Triggers" (words that are statistically associated with the query word in the same piece of text.)	cow → milking  
          </td>
      </tr>
             <tr>
          <td>
            <h6>Antonyms</h6>  
          </td>
          <td>
              Antonyms (per WordNet)	late → early
          </td>
      </tr>
             <tr>
          <td>
            <h6>Kind Of</h6>  
          </td>
          <td>
              "Kind of" (direct hypernyms, per WordNet)	gondola → boat
          </td>
      </tr>
             <tr>
          <td>
            <h6>General</h6>  
          </td>
          <td>
              "More general than" (direct hyponyms, per WordNet)	boat → gondola
          </td>
      </tr>       <tr>
          <td>
            <h6>Comprises</h6>  
          </td>
          <td>
             "Comprises" (direct holonyms, per WordNet)	car → accelerator 
          </td>
      </tr>       <tr>
          <td>
            <h6>Part of</h6>  
          </td>
          <td>
             "Part of" (direct meronyms, per WordNet)	trunk → tree 
          </td>
      </tr>
      <tr>
          <td>
            <h6>Followers</h6>  
          </td>
          <td>
              Frequent followers (w′ such that P(w′|w) ≥ 0.001, per Google Books Ngrams)	wreak → havoc
          </td>
      </tr>
      <tr>
          <td>
            <h6>Predecessors</h6>  
          </td>
          <td>
              Frequent predecessors (w′ such that P(w|w′) ≥ 0.001, per Google Books Ngrams)	havoc → wreak
          </td>
      </tr>
      <tr>
          <td>
            <h6>Rhymes</h6>  
          </td>
          <td>
              Rhymes ("perfect" rhymes, per RhymeZone)	spade → aid
          </td>
      </tr><tr>
          <td>
            <h6>Approx. Rhymes</h6>  
          </td>
          <td>
              Approximate rhymes (per RhymeZone)	forest → chorus
          </td>
      </tr><tr>
          <td>
            <h6>Homophones</h6>  
          </td>
          <td>
     Homophones (sound-alike words)	course → coarse


          </td>
      </tr>
      <tr>
          <td>
            <h6>Consonant</h6>  
          </td>
          <td>
           Consonant match	sample → simple   
          </td>
      </tr>
      <tr>
          <td>
            <h6>Topics</h6>  
          </td>
          <td>
              Topic words: An optional hint to the system about the theme of the document being written. Results will be skewed toward these topics. At most 5 words can be specified. Space or comma delimited. Nouns work best.
          </td>
      </tr>
    </tbody>
  </table>
</div><!-- end table -->


    </div><!--container-->
</div><!-- row -->

</div><!-- end container -->
<div class="row m-4"></div>
<div class="container-fluid">
    <div class="row bg-secondary text-light shadow">
        <div class="col-sm-4 p-4">
           <p> Started this with WordsAPI, switched to <a href="http://www.datamuse.com/api/">Datamuse API</a> which is way better, lots more features, lots more than just a dictionary, a bit of a learning curve.</p>
            
        </div>
                <div class="col-sm-4 p-4">
                    <p>This site is open source and will be on <a href="https://github.com/sandorfalot">my Github soon</a>, I just need to finish.</p>
                </div>
        <div class="col-sm-4 p-4">
            
            <p>I have a couple of sites to keep track of.
            <br><A href="http://goawaycovid19.org">Covid Ontario</A>
            <br><a href="https://loomknitting.org">Loom Knitting Patterns and Tutorials</a>
            <br>And a bunch of unfinished stuff.
            </p>
        </div>

    </div>
    
</div>

 <script>
  function process()
    {
        var url = "https://api.datamuse.com/" + document.getElementById("sel2").value + "=" + document.getElementById("searchword").value;
        location.href = url;
        return false;
    }
 
const data = null;

const xhr = new XMLHttpRequest();
xhr.overrideMimeType("application/json");

xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
	if (this.readyState === this.DONE) {

		console.log(this.responseText);
		   var jsonResponse = JSON.parse(xhr.responseText);
		   document.getElementById("word").innerHTML = this.responseText;		    
var i;
var text = "";

for (i = 0; i < jsonResponse.length; i++) {
  text += jsonResponse[i].word + " - <small><span class='text-secondary'>" + jsonResponse[i].numSyllables + " syllables</span></small> <span class='badge bg-danger text-light shadow'>" + jsonResponse[i].score + " <small>pts</small> </span> ";
}
		    document.getElementById("div1").innerHTML = text;

	}
});

xhr.open("GET", "https://api.datamuse.com/words?rel_rhy=forgetful");


xhr.send(data);
</script>
    </body>
</html>

<?php
function table_to_see_POST_values(){  

      echo "<div style='background-color:white; width: 700px;'>";
      $d = '';
      $d .= "<table class=\'debug_table\'>";
      $d .= '<tr><td>$id</td><td>' . $_POST['id'] . '</td></tr>';
      $d .= '<tr><td>$language</td><td>' . $_POST['language'] . '</td></tr>';
      $d .= '<tr><td>$text</td><td>' . $_POST['text'] . '</td></tr>';
      $d .= '<tr><td>$translit</td><td>' . $_POST['translit'] . '</td></tr>';
      $d .= '<tr><td>$authen</td><td>' . $_POST['authen'] . '</td></tr>';
      $d .= '<tr><td>$tags</td><td>' . $_POST['tags'] . '</td></tr>';
      $d .= '<tr><td>$author</td><td>' . $_POST['author'] . '</td></tr>';
      $d .= '<tr><td>$source</td><td>' . $_POST['source'] . '</td></tr>';
      $d .= '<tr><td>$use</td><td>' . $_POST['use'] . '</td></tr>';
      $d .= '<tr><td>$link</td><td>' . $_POST['link'] . '</td></tr>';
      $d .= '</table>';
      echo $d;
      echo "</div>";
}

function table_to_see_query_values($query){
  
  echo "<div style='background-color:white; width: 700px;'>";
  $e = $query;
  echo $e;
  echo "</div>";
}

function form_to_create_entry(){
  ?>
  <!-- 1 -->
  <form action="" method="post">
    
    <?php    
    //if($_GET['id']){ // 2
      //$em = new EntryManager(); // 3
      //$entry = $em->getEntryById($_GET['id']);
    //}// 2

    ?>

    <div id="entry_create_form">
      
      <div class="entry_create_row">
        <div id="entry_create_form_title">Create entry
          <div class="note">
            Note: fields marked with the red asterisk (<span class="Painted_red">*</span>) are mandatory.
          </div>
        </div>
      </div>

      <!-- temporary: next id -->
      <div class="entry_create_row">
        <div class="entry_create_record_title">[enter an id] <span class="Painted_red">*</span>
          <!--<div class="entry_create_record_title_explanation">
            The language in which the text of your phrase is written
          </div>-->
        </div>
        <div class="entry_create_record_value">
          <input name="id" type="text" size="5" value=""/>
        </div>
      </div>
      
      
      <!-- language in which entry is created -->
      <div class="entry_create_row">
        <div class="entry_create_record_title">In what language is this? <span class="Painted_red">*</span>
          <!--<div class="entry_create_record_title_explanation">
            The language in which the text of your phrase is written
          </div>-->
        </div>
        <div class="entry_create_record_value">
          <select name="language">
            <option value="" selected="selected">Choose one...</option>
            <option value="chinese">Chinese</option>
            <option value="english">English</option>
            <option value="russian">Russian</option>          
          </select>
        </div>
      </div>

      <!-- Not sure if we need this
      <div class="entry_create_row">
        <div class="entry_create_record_title">Target language <span class="Painted_red">*</span> </div>
        <div class="entry_create_record_value">
          <select name="entry_target_lang">
            <option selected="selected">Choose one...</option>
            <option>English</option>
            <option>Russian</option>
            <option>Chinese</option>
          </select>
        </div>
      </div>
      -->

      <!-- ent_entry_text -->
      <div class="entry_create_row">
        <div class="entry_create_record_title">
          Text of the phrase <span class="Painted_red">*</span> 
        </div>
        <div class="entry_create_record_value">
          <input name="text" placeholder="Enter the text of the phrase"/><?php
//            // if we have an id, then it's an UPDATE operation
//            if($_GET['id']){
//              // display the text of the entry gotten by the ID from the DB
//              print $entry->getEntryText();
//            } // if it's a CREATE operation
//            else{
//              // display the entry's text from the POST
//              print $_POST['text'];
//            }
        ?>
        </div>
      </div>

      <!-- commented out because we are not creating 
      the dad and a kid together, but either the dad OR a kid
      <div class="entry_create_row">
        <div class="entry_create_record_title">
           Translation <span class="Painted_red">*</span> 
        </div>
        <div class="entry_create_record_value">
          <textarea rows="4" cols="50" placeholder="Enter the translation of the phrase"></textarea>
        </div>
      </div>
      -->

      <!-- ent_entry_verbatim to be created automatically -->
      <div class="entry_create_row">
        <div class="entry_create_record_title">
           Verbatim
        </div>
        <div class="entry_create_record_value">
          <input name="verbatim" 
                    placeholder="Enter the text of the phrase"/><?php
//            // if we have an id, then it's an UPDATE operation
//            if($_GET['id']){
//              // display the text of the entry gotten by the ID from the DB
//              print $entry->getEntryText();
//            } // if it's a CREATE operation
//            else{
//              // display the entry's text from the POST
//              print $_POST['text'];
//            }
        ?>
        </div>
      </div>
      

      <!-- ent_entry_translit -->
      <div class="entry_create_row">
        <div class="entry_create_record_title">
          Transliteration <span class="Painted_red">*</span> 
        </div>
        <div class="entry_create_record_value">
          <input name="translit" 
                    placeholder="Enter the transliteration of the phrase"/><?php
//            // if we have an id, then it's an UPDATE operation
//            if($_GET['id']){
//              // display the entry's transliteration gotten by the ID from the DB
//              print $entry->getEntryText();
//            } // if it's a CREATE operation
//            else{
//              // display the entry's transliteration from the POST
//              print $_POST['translit'];
//            }
        ?>
        </div>
      </div>


      <!-- entry_authen_status_id -->
      <div class="entry_create_row">
        <div class="entry_create_record_title">Authenticity status <span class="Painted_red">*</span> </div>
        <div class="entry_create_record_value">
          <select name="authen">
            <option value="" selected="selected">Choose one...</option>
            <option value="1">Original</option>
            <option value="2">Translation</option>
            <option value="3">Unknown</option>
          </select>
        </div>
      </div>

      <!-- the value of ent_entry_translation_of will be supplied automatically -->
      <!-- the value of ent_entry_creator_id will be supplied automatically -->
      <!-- the value of ent_entry_media_id will be delivered ... -->
      <!-- the value of ent_entry_comment_id willl be .... -->
      <!-- the value of ent_entry_rating_id willl be .... -->

      <!-- ent_entry_tags -->
      <div class="entry_create_row">
        <div class="entry_create_record_title">
           Tags
        </div>
        <div class="entry_create_record_value">
          <input name="tags" type="text" size="50" value="<?php
//            // if we have an id, then it's an UPDATE operation
//            if($_GET['id']){
//              // display the entry's tags gotten by the ID from the DB
//              print $entry->getEntryTags();
//            } // if it's a CREATE operation
//            else{
//              // display the entry's tags from the POST
//              print $_POST['tags'];
//            }
          ?>"/>
        </div>
      </div>


      <!-- ent_entry_author_id -->
      <div class="entry_create_row">
        <div class="entry_create_record_title">
           Author [enter '1']
        </div>
        <div class="entry_create_record_value">
          <input name="author" type="text" size="50" value="<?php
//            // if we have an id, then it's an UPDATE operation
//            if($_GET['id']){
//              // display the entry's author gotten by the ID from the DB
//              print $entry->getEntrySource();
//            } // if it's a CREATE operation
//            else{
//              // display the entry's author from the POST
//              print $_POST['author'];
//            }
          ?>"/>
        </div>
      </div>



      <!-- ent_entry_source_id -->
      <div class="entry_create_row">
        <div class="entry_create_record_title">
          Source [enter 1]
        </div>
        <div class="entry_create_record_value">
          <input name="source" type="text" size="50" value="<?php
//            // if we have an id, then it's an UPDATE operation
//            if($_GET['id']){
//              // display the entry's source gotten by the ID from the DB
//              print $entry->getEntrySource();
//            } // if it's a CREATE operation
//            else{
//              // display the entry's source from the POST
//              print $_POST['source'];
//            }
          ?>"/>      
        </div>
      </div>


      <!-- ent_entry_use -->
      <div class="entry_create_row">
        <div class="entry_create_record_title">
          Phrase use  <span class="Painted_red">*</span> 
        </div>
        <div class="entry_create_record_value">
          <input name="use" placeholder="Describe how to use this phrase"/><?php
//            // if we have an id, then it's an UPDATE operation
//            if($_GET['id']){
//              // display the text of the entry gotten by the ID from the DB
//              print $entry->getEntryUse();
//            } // if it's a CREATE operation
//            else{
//              // display the entry's text from the POST
//              print $_POST['use'];
//            }
       ?>
        </div>
      </div>


      <!-- ent_entry_http_link -->
      <div class="entry_create_row">
        <div class="entry_create_record_title">
          Http link
        </div>
        <div class="entry_create_record_value">
          <input name="link" type="text" size="50" value="<?php
//            // if we have an id, then it's an UPDATE operation
//            if($_GET['id']){
//              // display the entry's source gotten by the ID from the DB
//              print $entry->getEntrySource();
//            } // if it's a CREATE operation
//            else{
//              // display the entry's source from the POST
//              print $_POST['source'];
//            }
          ?>"/>      
        </div>
      </div>    


      <div class="entry_create_buttons">
        <!-- 
        When the submit button is pressed $_POST super-global array 
        is filled with values in this format:
        each HEAN becomes the AE key
        each HEAV becomes the AE value
        
        if the $_POST is read in the same page
        the values will be taken by the same page again
        -->
        <button name ="submit" type="submit">Submit</button>
        <button type="reset">Reset</button>
      </div>

    </div>
  </form>

<?php 
}
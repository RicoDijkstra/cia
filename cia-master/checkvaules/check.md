# Check
## 1. Basic
-  trim
- stripslashes
-  htmlspecialchars

## 2. More checks
- Required
- type
- length
- format (expected)

## 3. Special attention
- metacharacters: use escape, quote, encode
- unexpected commands
- hidden interfaces
- file path, file name, uri
-       filenames: no binary data
-       filenames: restrict to ASCII char set
-       filenames: reject punctuation marks, only allow _ and -
-       filenames: limit length
- email
- HTTP header values
-       header() calls, strip HTTP metacharacters (\r\n)
-       location: urlencode()      
- Database Queries

## 4. Sanitize values used in other systems or subsystems
- HTML output: htmlentities()
- Shell arguments: escapeshellarg()


## 1. Helpfull
    filter_input, filter_var
    foreach (filter_list() as $id =>$filter) {
        echo $filter . '<br><br>';
    }
    
    // Expected variables with POST 
    $expect = array('studentID', 'year', study');
    foreach($expect AS $key) {
        if ( !empty($POST[ $key ]) ) {
            ${$key} = $_POST[ $key ];
        } else {
            ${$key} == NULL;
        }
    }
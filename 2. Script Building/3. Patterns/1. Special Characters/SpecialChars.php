<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title> Special Chars </title>
</head>

<body>
<h1> Special Characters </h1>   
<?php
/* Types:
- ^: beginning of line.

- $: End of line.

- .: any single character.

- ?: preceding character is optional.

- (): Groups literal characters together.

- []: Encloses set of optional-literal characters.

- [char-char]: represents all characters between two characters.

- +: one or more of preceding items.

- *: Zero or more of preceding items.

- { num,num }: starting & ending numbers of range of repetitions.

- \: following character is literal.

- ( | | ): set of alternative strings.
*/

# EXAMPLES: 
/* 
Example 1:
^[A-Za-z].*
# THE BREAKDOWN:
- [A-Za-z]: beginning of string must be letter either upper or lowercase.
- .*: Can be one or more characters long.

Example 2: 
Dear (Kim\Rikki)
# THE BREAKDOWN:
- Dear: Literal characters followed by a space.
- (Kim\Rikki): Either Kim or Rikki must follow the Dear.

Example 3: 
^[0-9]{5}(\-[0-9]{4})?$
# THE BREAKDOWN:
- ^[0-9]{5}: Beginning should be any 5-character-long numerical string with any numbers from 0-9. 
- \-: The hyphen is literal.
- [0-9]{4}: Next characters are 4-character-long numerical string with numbers from 0-9.
- ()?: Groups last two parts of pattern as optional. (The "(\-[0-9]{4})" in this case. )
- $: end of string.

Example 4: 
^.+@.+\.com$ : defines any string with @ in it that ends in ".com"
# THE BREAKDOWN:
- ^.+: any string of one or more characters.
- @: literal character; doesn't need to be preceded by backslash.
- .+: Any string of one or more characters.
- \.: PHP needs to look for a literal dot.
- com$: string should end with "com." 
*/

?>

</body>
</html>
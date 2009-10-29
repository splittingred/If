-----------
Snippet: If
-----------
Version: 1.0
Since: October 29, 2009
Author: Jason Coward <jason@collabpad.com>
        Shaun McCormick <shaun@collabpad.com>

A simple Conditional snippet.
    
Examples:
[[If?
    &subject=`[[+name]]`
    &operator=`notempty`
    &then=`Hello, [[+name]]!`
    &else=`Hello, anonymous!`
]]

[[If?
    &subject=`[[*scoreTV]]`
    &operator=`GT`
    &operand=`100`
    &then=`You win!`
    &else=`Not high enough. Try again!`
]]
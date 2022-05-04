## Screenshots

## Buttons:
![App Screenshot](./buttons.png)

## Borders:
![App Screenshot](./borders.png)

# Backgrounds Borders and Pseudo classes :

---

## Background and Background properties :
###  The background properties are used to add background effects for elements such as color, image, size, position and attachment. The shorthand property can be used to set all the background type properties.Some of the background properties are :

### 1) Background image 
#### This background property is used to set one or more images on an element at background. It requires url of the images as it's value.
Example : `background-image : url("../../media/examples/apple.png");`

### 2) Background Value
####  This background property is used to set the size of the background image.
Example : `background-size : auto;`
          `background-size : 300px 100px;`

### 3) Background Position 
#### This background property is used to set the initial position for each background image.
 Example : `background-position : center;`
           `background-position: top;`
           `background-position: bottom;` 

### 4) Background color
#### This background property is used to set background color of an element. It requires color name or code number as it's value.
Example : `background-color : red;` 

---

## Border Model:
### The Border Model consists of four parts: Margin , Border , Padding and Content.
### 1) Margin
#### This property is used to create space around the elements, outside of any defined borders. It can take four values for the spacing and the value applies space orderly around the element i.e. top right bottom left order. It's shorthand property can be used to space equally around the element. It takes value in the form of pixel(px), em and also percentage form.
Example : `margin : 20px;`
          `margin : 20px 10px 20px 10px;` 

### 2)Border
#### This property is used to specify the kind of border to display such as dotted, dashed, solid, double, inset, and outset. It's shorthand property can used to set the values of border-width, border-style, and border-color.
Example : `border : dotted 1px;`
`border : dashed 1px;` 
`border : solid 1px;` 
`border : double 1px;` 
`border : inset 1px;` 
`border : outset 1px;`

### 3) Padding
#### This property is used to create space around the element's content, inside of any defined borders. Similar to margin, padding also can take four values for the spacing and in same order (top right bottom left).It's shorthand property can be used to space equally around the element's content and the border from inside.
Example : `padding : 10px;`
          `padding : 10px 5px 10px 5px;` 
          `padding : 1em 2em;` 
          `padding : 5% 10%;`

---

## Pseudo Class
### Pseudo class is used to define a special state of an element. It is mostly found to be used with button creation such as changing the state of the button when cursor hovers over it, similarly when button is clicked or the button is not working. It is used to create user interface. It is used with the tags with ':' operator.


### Some of the Pseudo Classes are:
#### :hover
#### It's properties are executed when the cursor hovers over the element.
Example :

```CSS
a:hover 
{
  color: red;
}
```

### :active
#### - It's properties are executed when the cursor clicks the element.
Example :

```CSS
a:active 
{
  color: pink;
}
```

### :visited
#### - It's properties are executed when element has already been visited.
Example :

```CSS
a:visited 
{
  color: brown;
}
```

### :disabled
#### - It's properties are executed when element is in disabled state i.e. if it can't be activated.
Example :

```CSS
a:disabled 
{
  color: gray;
}
```
---
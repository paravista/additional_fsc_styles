# TYPO3 CMS Extension additional_fsc_styles

TYPO3 CMS Extension to add additional style options for a content element and header for fluid styled content

If you are using fluid_styled_content and you are missing additional style options for a header or the whole content element in addtion to layout, this extension can help out.


## What it does?
It extends tt_content with two new fields called "ce_style" and "header_style".

## Dependencies
TYPO3 EXT: fluid_styled_content

## Who to use it?
Just install as any other extension.
As a result you will get a style option in the header palette as a select box with style 1, 2, 3 pre-defined.
You will also find, in addition to "Layout", within tab Appearance a Style option.

You can use the ce_style options within your custom fluid styled content templates.
The header_style can be used for example in the Partials/Header.html

You can customize styles in Page TS Config for example:

```
# define header styles
TCEFORM.tt_content.header_style {
    altLabels.1 = My Custom Style 1
    altLabels.2 = My Custom Style 2
    altLabels.3 = My Custom Style 3
    addItems {
        4 = My Custom Addtional Style 1
        5 = My Custom Addtional Style 1
    }
}

# define content element styles
TCEFORM.tt_content.ce_style {
    altLabels.1 = My Custom Style 1
    altLabels.2 = My Custom Style 2
    altLabels.3 = My Custom Style 3
    addItems {
        4 = My Custom Addtional Style 1
        5 = My Custom Addtional Style 1
    }
}
```

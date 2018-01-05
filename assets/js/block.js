var el = wp.element.createElement;
var registerBlockType = wp.blocks.registerBlockType;
Editable = wp.blocks.Editable

registerBlockType(
    'cb/my_conditional_block', {
	title: 'Conditional Block',
	
	icon: 'edit',
	
	category: 'common',
	
	attributes: {
	    content: {
		type: 'array',
		source: 'children',
		selector: 'p',
	    }
	},
	
	edit: function (props) {
	    var content = props.attributes.content;
	    var focus = props.focus;
	    
	    function onChangeContent( newContent ) {
		props.setAttributes( { content: newContent } );
	    }
	    
	    return el(
		Editable,
		{
		    tagName: 'p',
		    className: props.className,
		    onChange: onChangeContent,
		    value: content,
		    focus: focus,
		    onFocus: props.setFocus,
		}
		)
	},
	
	save: function (props) {
	    var content = props.attributes.content;
	    return el( 'p', {className: props.className }, content );
	    
	},
    
    }
    );


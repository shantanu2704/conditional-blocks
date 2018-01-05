( function () {
    var el = wp.element.createElement;
    var registerBlockType = wp.blocks.registerBlockType;
    var Editable = wp.blocks.Editable;

    console.log(el);
    console.log(registerBlockType);
    console.log(Editable);

    registerBlockType('cb/my-conditional-block', {
	    title: 'Conditional Block',

	    icon: 'edit',

	    category: 'common',

	    attributes: {
		content: {
		    type: 'array',
		    source: 'children',
		    selector: 'p'
		}
	    },

	    edit: function ( props ) {
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
			onFocus: props.setFocus
		    }
		);
	    },

	    save: function ( props ) {
		var content = props.attributes.content;
		return el( 'p', { className: props.className }, content );

	    }

	}
    );

} )();
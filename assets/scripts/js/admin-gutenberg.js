const {
    AlignmentToolbar,
    BlockControls,
    registerBlockType
} = wp.blocks

const {
    Button,
    ColorPicker
} = wp.components

const {
    RichText,
    InspectorControls,
    ColorPalette
} = wp.editor

const {
    MediaUpload,
    InnerBlocks,
    ServerSideRender
} = wp.blockEditor

const {PanelBody} = wp.components

const {
    Fragment,
    RawHTML
} = wp.element

/**
 * Layout 1
 */

registerBlockType('writingor/layout-1', {
    title: 'Writingor Layout 1',
    icon: 'layout',
    category: 'writingor',

    attributes: {
        id : {
            type: 'string'
        },
        row_1: {
            type: 'string'
        },
        row_2: {
            type: 'string'
        },
        row_3: {
            type: 'string'
        },
        row_4: {
            type: 'string'
        },
        button_text: {
            type: 'string'
        },
        button_link: {
            type: 'string'
        },
        button_is_anchor: {
            type: 'bool'
        }
    },

    edit: function(props) {

        function update_id(e) {
            props.setAttributes({
                id: e.target.value
            })
        }

        function update_row_1(e) {
            props.setAttributes({
                row_1: e.target.value
            })
        }

        function update_row_2(e) {
            props.setAttributes({
                row_2: e.target.value
            })
        }

        function update_row_3(e) {
            props.setAttributes({
                row_3: e.target.value
            })
        }

        function update_row_4(e) {
            props.setAttributes({
                row_4: e.target.value
            })
        }

        function update_button_text(e) {
            props.setAttributes({
                button_text: e.target.value
            })
        }

        function update_button_link(e) {
            props.setAttributes({
                button_link: e.target.value
            })
        }

        function update_button_is_anchor(e) {
            props.setAttributes({
                button_is_anchor: e.target.checked
            })
        }

        return React.createElement(
            'div',
            {
                class: 'writingor--in-gutenberg-layout writingor--in-gutenberg-layout-1'
            },
            React.createElement(
                'h2',
                null,
                'writingor Layout 1'
            ),
            React.createElement(
                'label',
                null,
                'Layout ID'
            ),
            React.createElement(
                'input',
                {
                    type: 'text',
                    value: props.attributes.id,
                    onChange: update_id
                }
            ),
            React.createElement(
                'hr'
            ),
            React.createElement(
                'input',
                {
                    type: 'text',
                    placeholder: 'Row 1',
                    value: props.attributes.row_1,
                    onChange: update_row_1
                }
            ),
            React.createElement(
                'input',
                {
                    type: 'text',
                    placeholder: 'Row 2',
                    value: props.attributes.row_2,
                    onChange: update_row_2
                }
            ),
            React.createElement(
                'input',
                {
                    type: 'text',
                    placeholder: 'Row 3',
                    value: props.attributes.row_3,
                    onChange: update_row_3
                }
            ),
            React.createElement(
                'input',
                {
                    type: 'text',
                    placeholder: 'Row 4',
                    value: props.attributes.row_4,
                    onChange: update_row_4
                }
            ),
            React.createElement(
                'hr'
            ),
            React.createElement(
                'input',
                {
                    type: 'text',
                    placeholder: 'Button text',
                    value: props.attributes.button_text,
                    onChange: update_button_text
                }
            ),
            React.createElement(
                'input',
                {
                    type: 'text',
                    placeholder: 'Button link',
                    value: props.attributes.button_link,
                    onChange: update_button_link
                }
            ),
            React.createElement(
                'label',
                null,
                'Button anchor'
            ),
            React.createElement(
                'input',
                {
                    type: 'checkbox',
                    checked: props.attributes.button_is_anchor,
                    onChange: update_button_is_anchor
                }
            ),
        )
    },

    save: function(props) {

        layoutClasslist = 'writingor--layout writingor--layout-1'

        if (props.attributes.id) {
            layoutClasslist += ` ${props.attributes.id}`
        }

        function renderButton(props) {
            buttonClasslist = 'writingor--button-2'

            if (props.attributes.button_is_anchor) {

                buttonClasslist += ' writingor--anchor'
                return React.createElement(
                    'a',
                    {
                        href: props.attributes.button_link,
                        class: buttonClasslist
                    },
                    props.attributes.button_text
                )

            } else {
                return React.createElement(
                    'a',
                    {
                        href: props.attributes.button_link,
                        'data-modal': props.attributes.button_link,
                        class: buttonClasslist
                    },
                    props.attributes.button_text
                )
            }
        }

        return React.createElement(
            'div',
            {
                id: props.attributes.id,
                class: layoutClasslist,
                'data-layout': 'writingor--layout'
            },
            React.createElement(
                'div',
                {
                    class: 'writingor--layout-1__container writingor--container'
                },
                React.createElement(
                    'h1',
                    null,
                    props.attributes.row_1,
                    React.createElement(
                        'b',
                        null,
                        props.attributes.row_2
                    ),
                    React.createElement(
                        'i',
                        null,
                        props.attributes.row_3
                    ),
                    React.createElement(
                        'small',
                        null,
                        props.attributes.row_4
                    )
                ),
                renderButton(props)
            ),
            React.createElement(
                'div',
                {
                    class: 'writingor--transition-to-next-1'
                }
            )
        )
    }
})

/**
 * Layout 2
 */

registerBlockType('writingor/layout-2', {
    title: 'Writingor Layout 2',
    icon: 'layout',
    category: 'writingor',

    attributes: {
        id: {
            type: 'string'
        },
        title: {
            type: 'string'
        },
        img_url: {
            type: 'string',
            source: 'attribute',
            attribute: 'src',
            selector: 'img'
        },
        img_id: {
            type: 'number'
        },
        img_alt: {
            type: 'string',
            source: 'attribute',
            attribute: 'alt',
            selector: 'img'
        },
        button_text: {
            type: 'string'
        },
        button_link: {
            type: 'string'
        },
        button_is_anchor: {
            type: 'bool'
        }
    },

    edit: function(props) {

        function update_id(e) {
            props.setAttributes({
                id: e.target.value
            })
        }

        function update_title(e) {
            props.setAttributes({
                title: e.target.value
            })
        }

        function update_button_text(e) {
            props.setAttributes({
                button_text: e.target.value
            })
        }

        function update_button_link(e) {
            props.setAttributes({
                button_link: e.target.value
            })
        }

        function update_button_is_anchor(e) {
            props.setAttributes({
                button_is_anchor: e.target.checked
            })
        }

        function ulpoad_image(img) {
            props.setAttributes({
                img_url: img.url,
                img_alt: img.alt,
                img_id: img.id
            })
        }

        return React.createElement(
            'div',
            {
                class: 'writingor--in-gutenberg-layout writingor--in-gutenberg-layout-2'
            },
            React.createElement(
                'h2',
                null,
                'writingor Layout 2'
            ),
            React.createElement(
                'label',
                null,
                'Layout ID'
            ),
            React.createElement(
                'input',
                {
                    type: 'text',
                    value: props.attributes.id,
                    onChange: update_id
                }
            ),
            React.createElement(
                'hr'
            ),
            React.createElement(
                'label',
                null,
                'Title'
            ),
            React.createElement(
                'input',
                {
                    type: 'text',
                    placeholder: 'Title',
                    value: props.attributes.title,
                    onChange: update_title
                }
            ),
            React.createElement(
                'hr'
            ),
            React.createElement(
                'h2',
                null,
                'Cover'
            ),
            React.createElement(
                MediaUpload,
                {
                    onSelect: ulpoad_image,
                    value: props.attributes.img_id,
                    render: function ({open}) {
                        return React.createElement(
                            Button,
                            {
                                onClick: open
                            },
                            'Upload'
                        )
                    }
                }
            ),
            React.createElement(
                'img',
                {
                    src: props.attributes.img_url,
                    alt: props.attributes.img_alt
                }
            ),
            React.createElement(
                'hr'
            ),
            React.createElement(
                'h2',
                null,
                'HTML-content'
            ),
            React.createElement(
                'div',
                null,
                React.createElement(
                    InnerBlocks
                )
            ),
            React.createElement(
                'hr'
            ),
            React.createElement(
                'input',
                {
                    type: 'text',
                    placeholder: 'Button text',
                    value: props.attributes.button_text,
                    onChange: update_button_text
                }
            ),
            React.createElement(
                'input',
                {
                    type: 'text',
                    placeholder: 'Button link',
                    value: props.attributes.button_link,
                    onChange: update_button_link
                }
            ),
            React.createElement(
                'label',
                null,
                'Button anchor'
            ),
            React.createElement(
                'input',
                {
                    type: 'checkbox',
                    checked: props.attributes.button_is_anchor,
                    onChange: update_button_is_anchor
                }
            )
        )
    },

    save: function(props) {

        layoutClasslist = 'writingor--layout writingor--layout-2'

        if (props.attributes.id) {
            layoutClasslist += ` ${props.attributes.id}`
        }

        function renderButton(props) {
            buttonClasslist = 'writingor--button-3'

            if (props.attributes.button_is_anchor) {

                buttonClasslist += ' writingor--anchor'
                return React.createElement(
                    'a',
                    {
                        href: props.attributes.button_link,
                        class: buttonClasslist
                    },
                    props.attributes.button_text
                )

            } else {
                return React.createElement(
                    'a',
                    {
                        href: props.attributes.button_link,
                        'data-modal': props.attributes.button_link,
                        class: buttonClasslist
                    },
                    props.attributes.button_text
                )
            }
        }

        return React.createElement(
            'div',
            {
                'data-layout': 'writingor--layout'
            }, // fix gutenberg bug with InnerBlocks. First div must be witiout class
            React.createElement(
                'div',
                {
                    id: props.attributes.id,
                    class: layoutClasslist
                },
                React.createElement(
                    'div',
                    {
                        class: 'writingor--layout-2__container writingor--container'
                    },
                    React.createElement(
                        'div',
                        {
                            class: 'writingor--layout-2__header'
                        }, 
                        React.createElement(
                            'h2',
                            {
                                class: 'writingor--title-1'
                            },
                            props.attributes.title
                        )
                    ),
                    React.createElement(
                        'div',
                        {
                            class: 'writingor--layout-2__main'
                        }, 
                        React.createElement(
                            'div',
                            {
                                class: 'writingor--layout-2__cover'
                            }, 
                            React.createElement(
                                'img',
                                {
                                    src: props.attributes.img_url,
                                    alt: props.attributes.img_alt
                                }
                            )
                        ),
                        React.createElement(
                            'div',
                            {
                                class: 'writingor--layout-2__content'
                            },
                            React.createElement(
                                'div',
                                null,
                                React.createElement(
                                    InnerBlocks.Content
                                )
                            ),
                            renderButton(props)
                        )
                    )
                ),
                React.createElement(
                    'div',
                    {
                        class: 'writingor--transition-to-next-1'
                    }
                )
            )
        )
    }
})

/**
 * Layout 3
 */

registerBlockType('writingor/layout-3', {
    title: 'Writingor Layout 3',
    icon: 'layout',
    category: 'writingor',

    attributes: {
        id: {
            type: 'string'
        },
        title: {
            type: 'string'
        },
        subtitle: {
            type: 'string'
        },
        shortcode: {
            type: 'string'
        }
    },

    edit: function(props) {

        function update_id(e) {
            props.setAttributes({
                id: e.target.value
            })
        }

        function update_title(e) {
            props.setAttributes({
                title: e.target.value
            })
        }

        function update_subtitle(e) {
            props.setAttributes({
                subtitle: e.target.value
            })
        }

        function update_shortcode(e) {
            props.setAttributes({
                shortcode: e.target.value
            })
        }

        return React.createElement(
            'div',
            {
                class: 'writingor--in-gutenberg-layout writingor--in-gutenberg-layout-3'
            },
            React.createElement(
                'h2',
                null,
                'writingor Layout 3'
            ),
            React.createElement(
                'label',
                null,
                'Layout ID'
            ),
            React.createElement(
                'input',
                {
                    type: 'text',
                    value: props.attributes.id,
                    onChange: update_id
                }
            ),
            React.createElement(
                'hr'
            ),
            React.createElement(
                'label',
                null,
                'Title'
            ),
            React.createElement(
                'input',
                {
                    type: 'text',
                    placeholder: 'Title',
                    value: props.attributes.title,
                    onChange: update_title
                }
            ),
            React.createElement(
                'label',
                null,
                'Subtitle'
            ),
            React.createElement(
                'input',
                {
                    type: 'text',
                    placeholder: 'Subtitle',
                    value: props.attributes.subtitle,
                    onChange: update_subtitle
                }
            ),
            React.createElement(
                'hr'
            ),
            React.createElement(
                'h2',
                null,
                'Cards shortcode'
            ),
            React.createElement(
                'div',
                null,
                React.createElement(
                    RawHTML                    
                )
            ),
            React.createElement(
                'input',
                {
                    type: 'text',
                    placeholder: 'Shortcode (examlpe: writingor__benefits_loop)',
                    value: props.attributes.shortcode,
                    onChange: update_shortcode
                }
            ),
        )
    },

    save: function(props) {

        layoutClasslist = 'writingor--layout writingor--layout-3'

        if (props.attributes.id) {
            layoutClasslist += ` ${props.attributes.id}`
        }

        return React.createElement(
            'div',
            {
                'data-layout': 'writingor--layout'
            }, // fix gutenberg bug with InnerBlocks. First div must be witiout class
            
            React.createElement(
                'div',
                {
                    id: props.attributes.id,
                    class: layoutClasslist
                },
                React.createElement(
                    'div',
                    {
                        class: 'writingor--layout-3__container writingor--container'
                    }, 
                    React.createElement(
                        'div',
                        {
                            class: 'writingor--layout-3__header'
                        },
                        React.createElement(
                            'h2',
                            {
                                class: 'writingor--title-1'
                            },
                            props.attributes.title,
                            React.createElement(
                                'small',
                                null,
                                props.attributes.subtitle
                            )
                        )
                    ),
                    React.createElement(
                        'div',
                        {
                            class: 'writingor--layout-3__cards'
                        },
                        React.createElement(
                            RawHTML,
                            {},
                            `[${props.attributes.shortcode}]`
                        )
                    )
                ),
                React.createElement(
                    'div',
                    {
                        class: 'writingor--transition-to-next-1'
                    }
                )
            )
        )
    }
})

/**
 * Layout 4
 */

registerBlockType('writingor/layout-4', {
    title: 'Writingor Layout 4',
    icon: 'layout',
    category: 'writingor',

    attributes: {
        id: {
            type: 'string'
        },
        title: {
            type: 'string'
        },
        subtitle: {
            type: 'string'
        },
        shortcode: {
            type: 'string'
        }
    },

    edit: function(props) {

        function update_id(e) {
            props.setAttributes({
                id: e.target.value
            })
        }

        function update_title(e) {
            props.setAttributes({
                title: e.target.value
            })
        }

        function update_subtitle(e) {
            props.setAttributes({
                subtitle: e.target.value
            })
        }

        function update_shortcode(e) {
            props.setAttributes({
                shortcode: e.target.value
            })
        }

        return React.createElement(
            'div',
            {
                class: 'writingor--in-gutenberg-layout writingor--in-gutenberg-layout-4'
            },
            React.createElement(
                'h2',
                null,
                'writingor Layout 4'
            ),
            React.createElement(
                'label',
                null,
                'Layout ID'
            ),
            React.createElement(
                'input',
                {
                    type: 'text',
                    value: props.attributes.id,
                    onChange: update_id
                }
            ),
            React.createElement(
                'hr'
            ),
            React.createElement(
                'label',
                null,
                'Title'
            ),
            React.createElement(
                'input',
                {
                    type: 'text',
                    placeholder: 'Title',
                    value: props.attributes.title,
                    onChange: update_title
                }
            ),
            React.createElement(
                'label',
                null,
                'Subtitle'
            ),
            React.createElement(
                'input',
                {
                    type: 'text',
                    placeholder: 'Subtitle',
                    value: props.attributes.subtitle,
                    onChange: update_subtitle
                }
            ),
            React.createElement(
                'hr'
            ),
            React.createElement(
                'h2',
                null,
                'Cards shortcode'
            ),
            React.createElement(
                'div',
                null,
                React.createElement(
                    RawHTML                    
                )
            ),
            React.createElement(
                'input',
                {
                    type: 'text',
                    placeholder: 'Shortcode (examlpe: writingor__services_loop)',
                    value: props.attributes.shortcode,
                    onChange: update_shortcode
                }
            ),
        )
    },

    save: function(props) {

        layoutClasslist = 'writingor--layout writingor--layout-4'

        if (props.attributes.id) {
            layoutClasslist += ` ${props.attributes.id}`
        }

        return React.createElement(
            'div',
            {
                'data-layout': 'writingor--layout'
            }, // fix gutenberg bug with InnerBlocks. First div must be witiout class
            
            React.createElement(
                'div',
                {
                    id: props.attributes.id,
                    class: layoutClasslist
                },
                React.createElement(
                    'div',
                    {
                        class: 'writingor--layout-4__container writingor--container'
                    },
                    React.createElement(
                        'div',
                        {
                            class: 'writingor--layout-4__header'
                        },
                        React.createElement(
                            'h2',
                            {
                                class: 'writingor--title-1'
                            },
                            props.attributes.title,
                            React.createElement(
                                'small',
                                null,
                                props.attributes.subtitle
                            )
                        )
                    ),
                    React.createElement(
                        'div',
                        {
                            class: 'writingor--layout-4__cards'
                        },
                        React.createElement(
                            RawHTML,
                            {},
                            `[${props.attributes.shortcode}]`
                        )
                    )
                )
            )
        )
    }
})

/**
 * Layout 5
 */

registerBlockType('writingor/layout-5', {
    title: 'Writingor Layout 5',
    icon: 'layout',
    category: 'writingor',

    attributes: {
        id: {
            type: 'string'
        },
        title: {
            type: 'string'
        },
        shortcode: {
            type: 'string'
        },
        button_text: {
            type: 'string'
        },
        button_text_2: {
            type: 'string'
        }
    },

    edit: function(props) {

        function update_id(e) {
            props.setAttributes({
                id: e.target.value
            })
        }

        function update_title(e) {
            props.setAttributes({
                title: e.target.value
            })
        }

        function update_shortcode(e) {
            props.setAttributes({
                shortcode: e.target.value
            })
        }

        function update_button_text(e) {
            props.setAttributes({
                button_text: e.target.value
            })
        }

        function update_button_text_2(e) {
            props.setAttributes({
                button_text_2: e.target.value
            })
        }

        return React.createElement(
            'div',
            {
                class: 'writingor--in-gutenberg-layout writingor--in-gutenberg-layout-5'
            },
            React.createElement(
                'h2',
                null,
                'writingor Layout 5'
            ),
            React.createElement(
                'label',
                null,
                'Layout ID'
            ),
            React.createElement(
                'input',
                {
                    type: 'text',
                    value: props.attributes.id,
                    onChange: update_id
                }
            ),
            React.createElement(
                'hr'
            ),
            React.createElement(
                'label',
                null,
                'Title'
            ),
            React.createElement(
                'input',
                {
                    type: 'text',
                    placeholder: 'Title',
                    value: props.attributes.title,
                    onChange: update_title
                }
            ),
            React.createElement(
                'hr'
            ),
            React.createElement(
                'h2',
                null,
                'Cards shortcode'
            ),
            React.createElement(
                'div',
                null,
                React.createElement(
                    RawHTML                    
                )
            ),
            React.createElement(
                'input',
                {
                    type: 'text',
                    placeholder: 'Shortcode (examlpe: writingor__portfolio_loop)',
                    value: props.attributes.shortcode,
                    onChange: update_shortcode
                }
            ),
            React.createElement(
                'hr'
            ),
            React.createElement(
                'input',
                {
                    type: 'text',
                    placeholder: 'Button text 1',
                    value: props.attributes.button_text,
                    onChange: update_button_text
                }
            ),
            React.createElement(
                'input',
                {
                    type: 'text',
                    placeholder: 'Button text 2 (data processing)',
                    value: props.attributes.button_text_2,
                    onChange: update_button_text_2
                }
            )
        )
    },

    save: function(props) {

        layoutClasslist = 'writingor--layout writingor--layout-5'

        if (props.attributes.id) {
            layoutClasslist += ` ${props.attributes.id}`
        }

        return React.createElement(
            'div',
            {
                'data-layout': 'writingor--layout'
            }, // fix gutenberg bug with InnerBlocks. First div must be witiout class
            
            React.createElement(
                'div',
                {
                    id: props.attributes.id,
                    class: layoutClasslist
                },
                React.createElement(
                    'div',
                    {
                        class: 'writingor--layout-5__container writingor--container'
                    },
                    React.createElement(
                        'div',
                        {
                            class: 'writingor--layout-5__header'
                        },
                        React.createElement(
                            'h2',
                            {
                                class: 'writingor--title-1'
                            },
                            props.attributes.title
                        )
                    )
                ),
                React.createElement(
                    'div',
                    {
                        class: 'writingor--layout-5__main'
                    },
                    React.createElement(
                        'div',
                        {
                            class: 'writingor--transition-to-prev-1'
                        }
                    ),
                    React.createElement(
                        'div',
                        {
                            class: 'writingor--layout-5__cards'
                        },
                        React.createElement(
                            RawHTML,
                            {},
                            `[${props.attributes.shortcode}]`
                        )
                    )
                ),
                React.createElement(
                    'button',
                    {
                        class: 'writingor--layout-5__more',
                        'data-text-1': props.attributes.button_text,
                        'data-text-2': props.attributes.button_text_2,
                        'data-paged': 1
                    },
                    props.attributes.button_text
                ),
                React.createElement(
                    'div',
                    {
                        class: 'writingor--transition-to-next-1'
                    }
                )
            )
        )
    }
})

/**
 * Layout 6
 */

registerBlockType('writingor/layout-6', {
    title: 'Writingor Layout 6',
    icon: 'layout',
    category: 'writingor',

    attributes: {
        id: {
            type: 'string'
        },
        title: {
            type: 'string'
        },
        subtitle: {
            type: 'string'
        },
        shortcode: {
            type: 'string'
        }
    },

    edit: function(props) {

        function update_id(e) {
            props.setAttributes({
                id: e.target.value
            })
        }

        function update_title(e) {
            props.setAttributes({
                title: e.target.value
            })
        }

        function update_subtitle(e) {
            props.setAttributes({
                subtitle: e.target.value
            })
        }

        function update_shortcode(e) {
            props.setAttributes({
                shortcode: e.target.value
            })
        }

        return React.createElement(
            'div',
            {
                class: 'writingor--in-gutenberg-layout writingor--in-gutenberg-layout-6'
            },
            React.createElement(
                'h2',
                null,
                'writingor Layout 6'
            ),
            React.createElement(
                'label',
                null,
                'Layout ID'
            ),
            React.createElement(
                'input',
                {
                    type: 'text',
                    value: props.attributes.id,
                    onChange: update_id
                }
            ),
            React.createElement(
                'hr'
            ),
            React.createElement(
                'label',
                null,
                'Title'
            ),
            React.createElement(
                'input',
                {
                    type: 'text',
                    placeholder: 'Title',
                    value: props.attributes.title,
                    onChange: update_title
                }
            ),
            React.createElement(
                'label',
                null,
                'Subtitle'
            ),
            React.createElement(
                'input',
                {
                    type: 'text',
                    placeholder: 'Subtitle',
                    value: props.attributes.subtitle,
                    onChange: update_subtitle
                }
            ),
            React.createElement(
                'hr'
            ),
            React.createElement(
                'h2',
                null,
                'Cards shortcode'
            ),
            React.createElement(
                'div',
                null,
                React.createElement(
                    RawHTML                    
                )
            ),
            React.createElement(
                'input',
                {
                    type: 'text',
                    placeholder: 'Shortcode (examlpe: writingor__reviews_loop)',
                    value: props.attributes.shortcode,
                    onChange: update_shortcode
                }
            ),
        )
    },

    save: function(props) {

        layoutClasslist = 'writingor--layout writingor--layout-6'

        if (props.attributes.id) {
            layoutClasslist += ` ${props.attributes.id}`
        }

        return React.createElement(
            'div',
            {
                'data-layout': 'writingor--layout'
            }, // fix gutenberg bug with InnerBlocks. First div must be witiout class
            
            React.createElement(
                'div',
                {
                    id: props.attributes.id,
                    class: layoutClasslist
                },
                React.createElement(
                    'div',
                    {
                        class: 'writingor--layout-6__container writingor--container'
                    },
                    React.createElement(
                        'div',
                        {
                            class: 'writingor--layout-6__header'
                        },
                        React.createElement(
                            'h2',
                            {
                                class: 'writingor--title-1'
                            },
                            props.attributes.title,
                            React.createElement(
                                'small',
                                null,
                                props.attributes.subtitle
                            )
                        )
                    )
                ),
                React.createElement(
                    'div',
                    {
                        class: 'writingor--layout-6__main'
                    },
                    React.createElement(
                        'div',
                        {
                            class: 'writingor--layout-6__slider swiper'
                        },
                        React.createElement(
                            'div',
                            {
                                class: 'swiper-wrapper'
                            },
                            React.createElement(
                                RawHTML,
                                {},
                                `[${props.attributes.shortcode}]`
                            )
                        )
                    )
                )
            )
        )
    }
})

/**
 * Layout 7
 */

registerBlockType('writingor/layout-7', {
    title: 'Writingor Layout 7',
    icon: 'layout',
    category: 'writingor',

    attributes: {
        id: {
            type: 'string'
        },
        title: {
            type: 'string'
        }
    },

    edit: function(props) {

        function update_id(e) {
            props.setAttributes({
                id: e.target.value
            })
        }

        function update_title(e) {
            props.setAttributes({
                title: e.target.value
            })
        }

        return React.createElement(
            'div',
            {
                class: 'writingor--in-gutenberg-layout writingor--in-gutenberg-layout-7'
            },
            React.createElement(
                'h2',
                null,
                'writingor Layout 7 (Form 1)'
            ),
            React.createElement(
                'label',
                null,
                'Layout ID'
            ),
            React.createElement(
                'input',
                {
                    type: 'text',
                    value: props.attributes.id,
                    onChange: update_id
                }
            ),
            React.createElement(
                'hr'
            ),
            React.createElement(
                'label',
                null,
                'Title'
            ),
            React.createElement(
                'input',
                {
                    type: 'text',
                    placeholder: 'Title',
                    value: props.attributes.title,
                    onChange: update_title
                }
            )
        )
    },

    save: function(props) {

        layoutClasslist = 'writingor--layout writingor--layout-7'

        if (props.attributes.id) {
            layoutClasslist += ` ${props.attributes.id}`
        }

        return React.createElement(
            'div',
            {
                'data-layout': 'writingor--layout'
            }, // fix gutenberg bug with InnerBlocks. First div must be witiout class
            
            React.createElement(
                'div',
                {
                    id: props.attributes.id,
                    class: layoutClasslist
                },
                React.createElement(
                    'div',
                    {
                        class: 'writingor--transition-to-prev-1'
                    }
                ),
                React.createElement(
                    'div',
                    {
                        class: 'writingor--layout-7__container writingor--container'
                    },
                    React.createElement(
                        RawHTML,
                        {},
                        `[writingor__form_1 title="${props.attributes.title}"]`
                    )
                ),
                React.createElement(
                    'div',
                    {
                        class: 'writingor--transition-to-next-1'
                    }
                )
            )
        )
    }
})

/**
 * Layout 8
 */

registerBlockType('writingor/layout-8', {
    title: 'Writingor Layout 8',
    icon: 'layout',
    category: 'writingor',

    attributes: {
        id: {
            type: 'string'
        },
        title: {
            type: 'string'
        }
    },

    edit: function(props) {

        function update_id(e) {
            props.setAttributes({
                id: e.target.value
            })
        }

        function update_title(e) {
            props.setAttributes({
                title: e.target.value
            })
        }

        return React.createElement(
            'div',
            {
                class: 'writingor--in-gutenberg-layout writingor--in-gutenberg-layout-8'
            },
            React.createElement(
                'h2',
                null,
                'writingor Layout 8'
            ),
            React.createElement(
                'label',
                null,
                'Layout ID'
            ),
            React.createElement(
                'input',
                {
                    type: 'text',
                    value: props.attributes.id,
                    onChange: update_id
                }
            ),
            React.createElement(
                'hr'
            ),
            React.createElement(
                'label',
                null,
                'Title'
            ),
            React.createElement(
                'input',
                {
                    type: 'text',
                    placeholder: 'Title',
                    value: props.attributes.title,
                    onChange: update_title
                }
            ),
            React.createElement(
                'hr'
            ),
            React.createElement(
                'h2',
                null,
                'HTML-content'
            ),
            React.createElement(
                'div',
                null,
                React.createElement(
                    InnerBlocks
                )
            )
        )
    },

    save: function(props) {

        layoutClasslist = 'writingor--layout writingor--layout-8'

        if (props.attributes.id) {
            layoutClasslist += ` ${props.attributes.id}`
        }

        return React.createElement(
            'div',
            {
                'data-layout': 'writingor--layout'
            }, // fix gutenberg bug with InnerBlocks. First div must be witiout class
            
            React.createElement(
                'div',
                {
                    id: props.attributes.id,
                    class: layoutClasslist
                },
                React.createElement(
                    'div',
                    {
                        class: 'writingor--layout-8__container writingor--container'
                    },
                    React.createElement(
                        'div',
                        {
                            class: 'writingor--layout-8__header'
                        },
                        React.createElement(
                            'h2',
                            {
                                class: 'writingor--title-1'
                            },
                            props.attributes.title
                        )
                    ),
                    React.createElement(
                        'div',
                        {
                            class: 'writingor--layout-8__main'
                        },
                        React.createElement(
                            InnerBlocks.Content
                        )
                    )
                )
            )
        )
    }
})
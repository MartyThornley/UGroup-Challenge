/**
 * Block dependencies
 */

import classnames from "classnames";

/**
 * Internal block libraries
 */
const { __ } = wp.i18n;

const { registerBlockType } = wp.blocks;

const { RichText, InspectorControls, BlockControls } = wp.editor;

const { PanelBody, TextareaControl, ColorPalette } = wp.components;

/**
 * Register block
 */
export default registerBlockType("ugroup/custom-background-text", {
  // Block Title
  title: __("UGroup Custom Block"),
  // Block Description
  description: __("A Custom Block with Background Color Picker."),
  // Block Category
  category: "common",
  // Block Icon
  icon: "groups",
  // Block Keywords
  keywords: [__("UGroup")],
  // Block Attributes
  attributes: {
    text: {
      type: "string"
    },
    background_color: {
      type: "string",
      default: "red"
    },
    block_style: {
      selector: "array",
      default: {
        backgroundColor: "red",
        padding: 20
      }
    }
  },

  // Defining the edit interface
  edit: props => {
    let background_color = props.attributes.background_color;
    let block_style = props.attributes.block_style;

    const onChangeText = value => {
      props.setAttributes({ text: value });
    };
    const onChangeBgColor = value => {
      props.setAttributes({ background_color: value });
      props.setAttributes({
        block_style: {
          backgroundColor: background_color,
          padding: 20
        }
      });
    };

    return [
      !!props.isSelected && (
        <InspectorControls key="inspector">
          <PanelBody title={__("Background Color")}>
            <ColorPalette onChange={onChangeBgColor} />
          </PanelBody>
        </InspectorControls>
      ),
      <div className={props.className} style={block_style}>
        <div className={"ugroup-custom-block"}>
          <h2>U.Group Custom Gutenberg Block</h2>
          <div className="ugroup-text">
            <TextareaControl
              format="string"
              formattingControls={[]}
              placeholder={__("You can place some text here.")}
              onChange={onChangeText}
              value={props.attributes.text}
            />
          </div>
        </div>
      </div>
    ];
  },
  // Defining the save interface
  save(props) {
    let background_color = props.attributes.background_color;
    let block_style = props.attributes.block_style;
    let frontEndStyle = { backgroundColor: "white" };

    return (
      <div className={props.className} style={block_style}>
        <div className={"ugroup-custom-block"}>
          <div className="ugroup-text">
            <div className="front-end-text" style={frontEndStyle}>
              {props.attributes.text}
            </div>
          </div>
        </div>
      </div>
    );
  }
});

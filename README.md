# UGroup Code Challenge

Custom Gutenberg block with color picker.

## Description:

Create a Gutenberg block within a custom plugin

The block must:

- Have an editable text field within the editor
- Include an option in the panel for modifying a CSS property of the block (such as background color or width)
- Cause React to re-render the block when an option is changed from the sidebar
- Display in the published page/post as it was configured in Gutenberg

Additional information:

- The use of Webpack for compiling the block is encouraged, but not required.
- The plugin should be pushed to a Github repository so that we may review and test it.
- This will then be used for discussion as part of the interview.

## Prerequisites

1. WordPress with Gutenberg editor active

## Installation

1. Download or clone
2. Unzip
3. Add to WordPress plugins folder
4. Activate

## Usage

1. Navigate to any post edit screen
2. Add the new Block "UGroup Custom Block", from "Common" group

## Development

1. Install as described above within a local development environment
2. cd to plugin folder
3. For Development: npm run dev
4. Final Build: npm run build
5. Edit .js and .scss files in /src/ folder
6. Production files will be compiled in /dist/

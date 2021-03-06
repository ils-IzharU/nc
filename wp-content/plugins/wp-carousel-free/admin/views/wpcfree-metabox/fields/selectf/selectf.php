<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.
/**
 *
 * Field: select
 *
 * @since 1.0.0
 * @version 1.0.0
 */
if ( ! class_exists( 'SP_WPCF_Field_selectf' ) ) {
	class SP_WPCF_Field_selectf extends SP_WPCF_Fields {

		/**
		 * Selectf field constructor.
		 *
		 * @param array  $field The field type.
		 * @param string $value The values of the field.
		 * @param string $unique The unique ID for the field.
		 * @param string $where To where show the output CSS.
		 * @param string $parent The parent args.
		 */
		public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
			parent::__construct( $field, $value, $unique, $where, $parent );
		}

		/**
		 * Render field
		 *
		 * @return void
		 */
		public function render() {

			$args = wp_parse_args(
				$this->field,
				array(
					'chosen'      => false,
					'multiple'    => false,
					'placeholder' => '',
				)
			);

			$this->value = ( is_array( $this->value ) ) ? $this->value : array_filter( (array) $this->value );

			echo wp_kses_post( $this->field_before() );

			if ( ! empty( $this->field['options'] ) ) {

				$options          = ( is_array( $this->field['options'] ) ) ? $this->field['options'] : $this->field_data( $this->field['options'] );
				$multiple_name    = ( $args['multiple'] ) ? '[]' : '';
				$multiple_attr    = ( $args['multiple'] ) ? ' multiple="multiple"' : '';
				$chosen_rtl       = ( is_rtl() ) ? ' chosen-rtl' : '';
				$chosen_attr      = ( $args['chosen'] ) ? ' class="spf-chosen' . $chosen_rtl . '"' : '';
				$placeholder_attr = ( $args['chosen'] && $args['placeholder'] ) ? ' data-placeholder="' . $args['placeholder'] . '"' : '';

				if ( ! empty( $options ) ) {

					echo '<select name="' . $this->field_name( $multiple_name ) . '"' . $multiple_attr . $chosen_attr . $placeholder_attr . $this->field_attributes() . '>';

					if ( $args['placeholder'] && empty( $args['multiple'] ) ) {
						if ( ! empty( $args['chosen'] ) ) {
							echo '<option value=""></option>';
						} else {
							echo '<option value="">' . esc_html( $args['placeholder'] ) . '</option>';
						}
					}

					foreach ( $options as $option_key => $option ) {
						$pro_only_value = isset( $option['pro_only'] ) ? $option['pro_only'] : '';
						$pro_only       = $pro_only_value ? ' disabled' : '';
						$selected       = ( in_array( $option_key, $this->value ) ) ? ' selected' : '';
						echo '<option' . esc_attr( $pro_only ) . ' value="' . esc_attr( $option_key ) . '" ' . esc_attr( $selected ) . '>' . esc_html( $option['text'] ) . '</option>';
					}

					echo '</select>';

				} else {

					echo ! empty( $this->field['empty_message'] ) ? esc_html( $this->field['empty_message'] ) : esc_html__( 'No data provided for this option type.', 'wp-carousel-free' );
				}
			}

			echo wp_kses_post( $this->field_after() );

		}

	}
}

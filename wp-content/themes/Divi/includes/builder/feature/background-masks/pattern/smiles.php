<?php
/**
 * Background Pattern Style - Smiles.
 *
 * @package Divi
 * @sub-package Builder
 * @since 4.15.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}

/**
 * Class ET_Builder_Pattern_Smiles
 *
 * @since 4.15.0
 */
class ET_Builder_Pattern_Smiles extends ET_Builder_Background_Pattern_Style_Base {
	/**
	 * Configuration.
	 *
	 * @return array
	 */
	public function settings() {
		return array(
			'label'      => esc_html__( 'Smiles', 'et-builder' ),
			'svgContent' => array(
				'default'          => '<path d="M41.2,72.38A23.15,23.15,0,0,0,38.08,37,2.5,2.5,0,0,1,41,32.91a29.88,29.88,0,0,1,3.79,3.17,28.21,28.21,0,0,1,0,39.84A29.88,29.88,0,0,1,41,79.09a2.54,2.54,0,0,1-1.43.45A2.5,2.5,0,0,1,38.08,75,23.32,23.32,0,0,0,41.2,72.38ZM15.66,0H10.12a23.27,23.27,0,0,1-4.4,5.86A23.17,23.17,0,0,1,0,9.89v5.49A28.29,28.29,0,0,0,9.18,9.46,28.14,28.14,0,0,0,15.66,0Zm1.81,284.78a2.5,2.5,0,0,0-4.94.77,23.3,23.3,0,0,1,.28,4.06A23,23,0,0,1,10.12,300h5.54a28.18,28.18,0,0,0,2.15-10.29A28.26,28.26,0,0,0,17.47,284.78ZM285.17,11.89a2.5,2.5,0,0,0-1,4.91,28.46,28.46,0,0,0,4.91.53h.55A28.15,28.15,0,0,0,300,15.38V9.89a23.08,23.08,0,0,1-10.79,2.44A23.33,23.33,0,0,1,285.17,11.89Zm-82.73,63.6a29.71,29.71,0,0,0-4.85-.94,2.5,2.5,0,0,0-.53,5,23.59,23.59,0,0,1,4,.78,23.13,23.13,0,0,1,14.38,32.46,2.5,2.5,0,0,0,4.49,2.2,27.06,27.06,0,0,0,1.78-4.61,28.16,28.16,0,0,0-19.27-34.86ZM262.38,58a28.27,28.27,0,0,0,14-3.74A2.5,2.5,0,0,0,273.88,50a24,24,0,0,1-3.69,1.71,23.13,23.13,0,0,1-30.67-17.9,2.5,2.5,0,0,0-4.93.85A28.19,28.19,0,0,0,262.38,58Zm-58,111.57h0a2.49,2.49,0,0,0-2.5,2.49,24.49,24.49,0,0,1-.37,4.05,23.2,23.2,0,0,1-26.94,18.65,22.91,22.91,0,0,1-3.92-1.08,2.5,2.5,0,1,0-1.73,4.69,28.31,28.31,0,0,0,4.76,1.31A28.13,28.13,0,0,0,206.44,177a28.49,28.49,0,0,0,.45-4.92A2.51,2.51,0,0,0,204.4,169.61Zm-18.8,83.24a23.13,23.13,0,0,1-26.2-27.49,2.5,2.5,0,1,0-4.9-1,28.53,28.53,0,0,0-.56,4.91,28.18,28.18,0,0,0,27.48,28.84h.65a29.46,29.46,0,0,0,4.28-.32,2.5,2.5,0,1,0-.75-5ZM254,121.26a23.92,23.92,0,0,1,3.34-2.32,2.5,2.5,0,0,0-2.5-4.33,27.65,27.65,0,0,0-4.05,2.83,28.12,28.12,0,0,0,.05,43.16,2.42,2.42,0,0,0,1.6.59,2.5,2.5,0,0,0,1.61-4.42,22.32,22.32,0,0,1-2.88-2.87A23.18,23.18,0,0,1,254,121.26Zm24.05,91.85a28.19,28.19,0,0,0-39.82,1,28.5,28.5,0,0,0-3.08,3.86,2.5,2.5,0,0,0,.7,3.46,2.45,2.45,0,0,0,1.38.42,2.51,2.51,0,0,0,2.09-1.11,23.11,23.11,0,0,1,35.28-4,22.66,22.66,0,0,1,2.69,3.06,2.5,2.5,0,0,0,4-3A28.38,28.38,0,0,0,278.05,213.11Zm-9.73,72a28,28,0,0,0-13.33-17,29.54,29.54,0,0,0-4.5-2,2.5,2.5,0,1,0-1.65,4.72,23.84,23.84,0,0,1,3.7,1.67A23.15,23.15,0,0,1,263.19,300h5.23A28,28,0,0,0,268.32,285.1ZM259.1,7.41A2.5,2.5,0,1,0,263,10.58a27.54,27.54,0,0,0,2.79-4.08A28.33,28.33,0,0,0,268.42,0h-5.23a23.55,23.55,0,0,1-1.79,4.06A22.92,22.92,0,0,1,259.1,7.41ZM80.45,256.51a28,28,0,0,0-20.28-7.3,28.42,28.42,0,0,0-4.89.66,2.5,2.5,0,1,0,1.1,4.88,23.37,23.37,0,0,1,4-.55,23.16,23.16,0,0,1,24.22,22.06,22.23,22.23,0,0,1-.17,4.06,2.51,2.51,0,0,0,2.16,2.8l.33,0A2.5,2.5,0,0,0,89.42,281a29.36,29.36,0,0,0,.21-4.94A28,28,0,0,0,80.45,256.51ZM97.35,93.44a2.5,2.5,0,0,0-3,1.92,23.15,23.15,0,0,1-35,14.84,2.5,2.5,0,1,0-2.65,4.24,28.53,28.53,0,0,0,4.4,2.25,28.16,28.16,0,0,0,36.66-15.56,28.78,28.78,0,0,0,1.44-4.73A2.49,2.49,0,0,0,97.35,93.44Zm34-49.5a28.18,28.18,0,0,0,39.46-5.41,28.34,28.34,0,0,0,2.63-4.18A2.5,2.5,0,1,0,169,32.07,23.16,23.16,0,0,1,134.36,40a23.44,23.44,0,0,1-3-2.74,2.5,2.5,0,0,0-3.66,3.4A28.51,28.51,0,0,0,131.34,43.94ZM192.55,8.17a28,28,0,0,0,14-3.76,28.42,28.42,0,0,0,4.05-2.84A2.48,2.48,0,0,0,211.48,0H204.2a.5.5,0,0,0-.12.08,23.07,23.07,0,0,1-17.59,2.3A23.4,23.4,0,0,1,180.83,0h-8.16A28.26,28.26,0,0,0,192.55,8.17Zm18.38,289.88a2.51,2.51,0,0,0-3.53-.31,23.18,23.18,0,0,1-3.2,2.26h7.28A2.5,2.5,0,0,0,210.93,298.05Zm-38.49-6.47a23.43,23.43,0,0,1-1.72-3.69,2.5,2.5,0,1,0-4.7,1.7A28.06,28.06,0,0,0,172.67,300h8.16A23,23,0,0,1,172.44,291.58Zm-19-193.11A23,23,0,0,1,143.19,84a22.34,22.34,0,0,1-.54-4,2.5,2.5,0,1,0-5,.24,28.14,28.14,0,0,0,13.1,22.5,27.93,27.93,0,0,0,15,4.36,28.4,28.4,0,0,0,6.26-.7,28.87,28.87,0,0,0,4.7-1.51,2.5,2.5,0,1,0-1.93-4.61,23.15,23.15,0,0,1-21.34-1.77ZM155.19,140a23.44,23.44,0,0,1,4.05.36,2.5,2.5,0,1,0,.86-4.92,27.41,27.41,0,0,0-4.91-.44A28.12,28.12,0,0,0,127.46,168a2.49,2.49,0,0,0,2.45,2.07,2.18,2.18,0,0,0,.44,0,2.5,2.5,0,0,0,2-2.89A23.15,23.15,0,0,1,155.19,140ZM45.49,150.05a23.46,23.46,0,0,1-.41-4.05,2.48,2.48,0,0,0-2.54-2.46,2.5,2.5,0,0,0-2.46,2.54,27.63,27.63,0,0,0,.5,4.92,28.11,28.11,0,0,0,33,22.32A28.4,28.4,0,0,0,78.32,172a2.5,2.5,0,1,0-1.79-4.67,23.16,23.16,0,0,1-31-17.24Zm60.74,38.69a2.5,2.5,0,1,0-3,4,23.15,23.15,0,0,1-.8,38,2.5,2.5,0,0,0,1.39,4.58,2.54,2.54,0,0,0,1.39-.42,29.1,29.1,0,0,0,3.85-3.09A28.17,28.17,0,0,0,110,192,28.34,28.34,0,0,0,106.23,188.74ZM59.5,208.6a2.5,2.5,0,0,0-1.38-3.26A28.14,28.14,0,0,0,20,225.5a28.41,28.41,0,0,0-.6,4.91,2.5,2.5,0,0,0,2.4,2.59h.1a2.49,2.49,0,0,0,2.49-2.41,24.25,24.25,0,0,1,.5-4A23.16,23.16,0,0,1,56.24,210,2.5,2.5,0,0,0,59.5,208.6ZM19.38,106.89a23.47,23.47,0,0,1,3.88,1.21,2.5,2.5,0,1,0,1.88-4.63A28.09,28.09,0,0,0,0,105.41v6.08a20.78,20.78,0,0,1,1.94-1.4A23,23,0,0,1,19.38,106.89Zm279.84-1a28.05,28.05,0,0,0-12.85,22.64,2.49,2.49,0,0,0,2.4,2.59h.1a2.49,2.49,0,0,0,2.49-2.41,23.25,23.25,0,0,1,.5-4A23,23,0,0,1,300,111.49v-6.08C299.74,105.57,299.48,105.72,299.22,105.89ZM83.12,47.37a2.25,2.25,0,0,0,.44,0,2.49,2.49,0,0,0,2-2.9,24.19,24.19,0,0,1-.36-4,23.15,23.15,0,0,1,27.22-22.8,2.5,2.5,0,0,0,.87-4.93A28.13,28.13,0,0,0,80.66,45.3,2.5,2.5,0,0,0,83.12,47.37Z"/>',
				'default-inverted' => '<path d="M291.86,124.68a23.25,23.25,0,0,0-.5,4,2.49,2.49,0,0,1-2.49,2.41h-.1a2.49,2.49,0,0,1-2.4-2.59,28.05,28.05,0,0,1,12.85-22.64c.26-.17.52-.32.78-.48v-90a28.15,28.15,0,0,1-10.34,1.95h-.55a28.46,28.46,0,0,1-4.91-.53,2.5,2.5,0,0,1,1-4.91,23.33,23.33,0,0,0,4,.44A23.08,23.08,0,0,0,300,9.89V0H268.42a28.33,28.33,0,0,1-2.66,6.5A27.54,27.54,0,0,1,263,10.58a2.5,2.5,0,0,1-3.87-3.17,22.92,22.92,0,0,0,2.3-3.35A23.55,23.55,0,0,0,263.19,0H211.48a2.48,2.48,0,0,1-.86,1.57,28.42,28.42,0,0,1-4.05,2.84,28,28,0,0,1-14,3.76A28.26,28.26,0,0,1,172.67,0h-157A28.14,28.14,0,0,1,9.18,9.46,28.29,28.29,0,0,1,0,15.38v90a28.09,28.09,0,0,1,25.14-1.94,2.5,2.5,0,1,1-1.88,4.63,23.47,23.47,0,0,0-3.88-1.21,23,23,0,0,0-17.44,3.2A20.78,20.78,0,0,0,0,111.49V300H10.12a23,23,0,0,0,2.69-10.39,23.3,23.3,0,0,0-.28-4.06,2.5,2.5,0,0,1,4.94-.77,28.26,28.26,0,0,1,.34,4.93A28.18,28.18,0,0,1,15.66,300h157A28.06,28.06,0,0,1,166,289.59a2.5,2.5,0,1,1,4.7-1.7,23.43,23.43,0,0,0,1.72,3.69,23,23,0,0,0,8.39,8.42H204.2a23.18,23.18,0,0,0,3.2-2.26,2.49,2.49,0,0,1,4.08,2.26h51.71a23.15,23.15,0,0,0-10.65-27.49,23.84,23.84,0,0,0-3.7-1.67,2.5,2.5,0,1,1,1.65-4.72,29.54,29.54,0,0,1,4.5,2A28.2,28.2,0,0,1,268.42,300H300V111.49A23,23,0,0,0,291.86,124.68ZM178,101.58a2.49,2.49,0,0,1-1.34,3.27,28.87,28.87,0,0,1-4.7,1.51,28.4,28.4,0,0,1-6.26.7,28.2,28.2,0,0,1-27.42-22,28.22,28.22,0,0,1-.66-4.89,2.5,2.5,0,1,1,5-.24,22.34,22.34,0,0,0,.54,4,23.16,23.16,0,0,0,31.57,16.25A2.49,2.49,0,0,1,178,101.58ZM127.82,37.09a2.5,2.5,0,0,1,3.53.13,23.44,23.44,0,0,0,3,2.74A23.15,23.15,0,0,0,169,32.07a2.5,2.5,0,1,1,4.45,2.28,28.16,28.16,0,0,1-25.1,15.31,28,28,0,0,1-17-5.72,28.51,28.51,0,0,1-3.65-3.32A2.5,2.5,0,0,1,127.82,37.09ZM108.39,12.22a28.37,28.37,0,0,1,4.92.43,2.5,2.5,0,0,1-.87,4.93,23.15,23.15,0,0,0-27.22,22.8,24.19,24.19,0,0,0,.36,4,2.49,2.49,0,0,1-2,2.9,2.25,2.25,0,0,1-.44,0,2.5,2.5,0,0,1-2.46-2.07,28.12,28.12,0,0,1,27.73-33.08ZM41.2,39.62A23.32,23.32,0,0,0,38.08,37,2.5,2.5,0,0,1,41,32.91a29.88,29.88,0,0,1,3.79,3.17,28.21,28.21,0,0,1,0,39.84A29.88,29.88,0,0,1,41,79.09a2.54,2.54,0,0,1-1.43.45A2.5,2.5,0,0,1,38.08,75,23.15,23.15,0,0,0,41.2,39.62Zm14,125.23a23.14,23.14,0,0,0,21.28,2.44A2.5,2.5,0,1,1,78.32,172a28.38,28.38,0,0,1-10.14,1.88A28.19,28.19,0,0,1,40.58,151a27.63,27.63,0,0,1-.5-4.92,2.5,2.5,0,0,1,2.46-2.54A2.48,2.48,0,0,1,45.08,146a23.46,23.46,0,0,0,.41,4.05A23,23,0,0,0,55.25,164.85Zm-30.41,61.7a24.25,24.25,0,0,0-.5,4A2.49,2.49,0,0,1,21.85,233h-.1a2.5,2.5,0,0,1-2.4-2.59,28.11,28.11,0,0,1,34.06-26.53,28.11,28.11,0,0,1,4.71,1.46A2.5,2.5,0,1,1,56.24,210a23.16,23.16,0,0,0-31.4,16.58ZM89.42,281A2.5,2.5,0,0,1,87,283.14l-.33,0a2.51,2.51,0,0,1-2.16-2.8,22.23,22.23,0,0,0,.17-4.06A23.16,23.16,0,0,0,60.41,254.2a23.37,23.37,0,0,0-4,.55,2.5,2.5,0,1,1-1.1-4.88,28.42,28.42,0,0,1,4.89-.66A28.16,28.16,0,0,1,89.63,276,29.36,29.36,0,0,1,89.42,281ZM99.27,96.4a28.78,28.78,0,0,1-1.44,4.73,28.16,28.16,0,0,1-36.66,15.56,28.53,28.53,0,0,1-4.4-2.25,2.5,2.5,0,1,1,2.65-4.24,23.14,23.14,0,0,0,35-14.84,2.5,2.5,0,0,1,4.89,1Zm9.84,135.41a29.1,29.1,0,0,1-3.85,3.09,2.54,2.54,0,0,1-1.39.42,2.5,2.5,0,0,1-1.39-4.58,23.14,23.14,0,0,0,.8-38,2.5,2.5,0,1,1,3-4A28.34,28.34,0,0,1,110,192a28.17,28.17,0,0,1-.84,39.83Zm23.27-64.63a2.5,2.5,0,0,1-2,2.89,2.18,2.18,0,0,1-.44,0,2.49,2.49,0,0,1-2.45-2.07A28.12,28.12,0,0,1,155.19,135a27.41,27.41,0,0,1,4.91.44,2.5,2.5,0,1,1-.86,4.92,23.44,23.44,0,0,0-4.05-.36,23.15,23.15,0,0,0-22.81,27.22Zm54,90.62a29.46,29.46,0,0,1-4.28.32h-.65a28.18,28.18,0,0,1-27.48-28.84,28.53,28.53,0,0,1,.56-4.91,2.5,2.5,0,1,1,4.9,1,23.38,23.38,0,0,0-.46,4,23.11,23.11,0,0,0,26.66,23.45,2.5,2.5,0,1,1,.75,5ZM206.44,177a28.14,28.14,0,0,1-37.51,21.37,2.5,2.5,0,1,1,1.73-4.69,22.91,22.91,0,0,0,3.92,1.08,23.2,23.2,0,0,0,26.94-18.65,24.49,24.49,0,0,0,.37-4.05,2.49,2.49,0,0,1,2.5-2.49h0a2.51,2.51,0,0,1,2.49,2.51A28.49,28.49,0,0,1,206.44,177Zm15.27-66.69a27.06,27.06,0,0,1-1.78,4.61,2.48,2.48,0,0,1-2.24,1.4,2.5,2.5,0,0,1-2.25-3.6A23.16,23.16,0,0,0,201.06,80.3a23.59,23.59,0,0,0-4-.78,2.5,2.5,0,0,1,.53-5,29.71,29.71,0,0,1,4.85.94,28.16,28.16,0,0,1,19.27,34.86Zm14.92-78.62a2.5,2.5,0,0,1,2.89,2,23.13,23.13,0,0,0,30.67,17.9A24,24,0,0,0,273.88,50a2.5,2.5,0,0,1,2.48,4.34,28.27,28.27,0,0,1-14,3.74,28.19,28.19,0,0,1-27.79-23.42A2.51,2.51,0,0,1,236.63,31.73ZM251.17,153.9a22.32,22.32,0,0,0,2.88,2.87,2.5,2.5,0,0,1-1.61,4.42,2.42,2.42,0,0,1-1.6-.59,28.16,28.16,0,0,1-.05-43.16,27.65,27.65,0,0,1,4.05-2.83,2.5,2.5,0,0,1,2.5,4.33,23.92,23.92,0,0,0-3.34,2.32,23.18,23.18,0,0,0-2.83,32.64Zm29.61,66.41a2.49,2.49,0,0,1-3.49-.52,22.66,22.66,0,0,0-2.69-3.06,23.11,23.11,0,0,0-35.28,4,2.51,2.51,0,0,1-2.09,1.11,2.45,2.45,0,0,1-1.38-.42,2.5,2.5,0,0,1-.7-3.46,28.5,28.5,0,0,1,3.08-3.86,28.13,28.13,0,0,1,43.08,2.73A2.49,2.49,0,0,1,280.78,220.31ZM5.72,5.86A23.17,23.17,0,0,1,0,9.89V0H10.12A23.27,23.27,0,0,1,5.72,5.86ZM186.49,2.38A23.4,23.4,0,0,1,180.83,0H204.2a.5.5,0,0,0-.12.08A23.07,23.07,0,0,1,186.49,2.38Z"/>',
				'rotated'          => '<path d="M72.38,258.8A23.15,23.15,0,0,0,37,261.92a2.5,2.5,0,0,1-4.1-2.87,29.88,29.88,0,0,1,3.17-3.79,28.21,28.21,0,0,1,39.84,0,29.88,29.88,0,0,1,3.17,3.79,2.54,2.54,0,0,1,.45,1.43A2.5,2.5,0,0,1,75,261.92,23.32,23.32,0,0,0,72.38,258.8ZM0,284.34v5.54a23.27,23.27,0,0,1,5.86,4.4,23.17,23.17,0,0,1,4,5.72h5.49a28.29,28.29,0,0,0-5.92-9.18A28.14,28.14,0,0,0,0,284.34Zm284.78-1.81a2.5,2.5,0,0,0,.77,4.94,23.3,23.3,0,0,1,4.06-.28A23,23,0,0,1,300,289.88v-5.54a28.24,28.24,0,0,0-15.22-1.81ZM11.89,14.83a2.5,2.5,0,0,0,4.91,1,28.46,28.46,0,0,0,.53-4.91v-.55A28.15,28.15,0,0,0,15.38,0H9.89a23.08,23.08,0,0,1,2.44,10.79A23.33,23.33,0,0,1,11.89,14.83Zm63.6,82.73a29.71,29.71,0,0,0-.94,4.85,2.5,2.5,0,0,0,5,.53,23.59,23.59,0,0,1,.78-4,23.13,23.13,0,0,1,32.46-14.38,2.5,2.5,0,1,0,2.2-4.49,27.06,27.06,0,0,0-4.61-1.78A28.16,28.16,0,0,0,75.49,97.56ZM58,37.62a28.27,28.27,0,0,0-3.74-14A2.5,2.5,0,0,0,50,26.12a24,24,0,0,1,1.71,3.69,23.13,23.13,0,0,1-17.9,30.67,2.5,2.5,0,1,0,.85,4.93A28.19,28.19,0,0,0,58,37.62Zm111.57,58h0a2.49,2.49,0,0,0,2.49,2.5,24.49,24.49,0,0,1,4.05.37,23.2,23.2,0,0,1,18.65,26.94,22.91,22.91,0,0,1-1.08,3.92,2.5,2.5,0,1,0,4.69,1.73,28.31,28.31,0,0,0,1.31-4.76A28.13,28.13,0,0,0,177,93.56a28.49,28.49,0,0,0-4.92-.45A2.51,2.51,0,0,0,169.61,95.6Zm83.24,18.8a23.13,23.13,0,0,1-27.49,26.2,2.5,2.5,0,1,0-1,4.9,28.53,28.53,0,0,0,4.91.56,28.18,28.18,0,0,0,28.84-27.48v-.65a29.46,29.46,0,0,0-.32-4.28,2.5,2.5,0,1,0-5,.75ZM121.26,46a23.92,23.92,0,0,1-2.32-3.34,2.5,2.5,0,0,0-4.33,2.5,27.65,27.65,0,0,0,2.83,4.05,28.12,28.12,0,0,0,43.16-.05,2.42,2.42,0,0,0,.59-1.6A2.5,2.5,0,0,0,156.77,46a22.32,22.32,0,0,1-2.87,2.88A23.18,23.18,0,0,1,121.26,46Zm91.85-24a28.19,28.19,0,0,0,1,39.82A28.5,28.5,0,0,0,218,64.85a2.5,2.5,0,0,0,3.46-.7,2.45,2.45,0,0,0,.42-1.38,2.51,2.51,0,0,0-1.11-2.09,23.11,23.11,0,0,1-4-35.28,22.66,22.66,0,0,1,3.06-2.69,2.5,2.5,0,0,0-3-4A28.38,28.38,0,0,0,213.11,22Zm72,9.73a28,28,0,0,0-17,13.33,28.56,28.56,0,0,0-2,4.5,2.5,2.5,0,1,0,4.71,1.65,23.84,23.84,0,0,1,1.67-3.7A23.15,23.15,0,0,1,300,36.81V31.58A28,28,0,0,0,285.1,31.68ZM7.41,40.9A2.5,2.5,0,1,0,10.58,37,27.54,27.54,0,0,0,6.5,34.24,28.33,28.33,0,0,0,0,31.58v5.23A23.55,23.55,0,0,1,4.06,38.6,22.92,22.92,0,0,1,7.41,40.9Zm249.1,178.65a28,28,0,0,0-7.3,20.28,28.42,28.42,0,0,0,.66,4.89,2.5,2.5,0,1,0,4.88-1.1,23.37,23.37,0,0,1-.55-4,23.16,23.16,0,0,1,22.06-24.22,22.23,22.23,0,0,1,4.06.17,2.51,2.51,0,0,0,2.8-2.16c0-.11,0-.22,0-.33a2.5,2.5,0,0,0-2.18-2.47,29.36,29.36,0,0,0-4.94-.21A28,28,0,0,0,256.51,219.55ZM93.44,202.65a2.5,2.5,0,0,0,1.92,3,23.15,23.15,0,0,1,14.84,35,2.5,2.5,0,1,0,4.24,2.65,28.53,28.53,0,0,0,2.25-4.4,28.16,28.16,0,0,0-15.56-36.66,28.78,28.78,0,0,0-4.73-1.44A2.49,2.49,0,0,0,93.44,202.65Zm-49.5-34a28.18,28.18,0,0,0-5.41-39.46,28.34,28.34,0,0,0-4.18-2.63A2.5,2.5,0,1,0,32.07,131,23.16,23.16,0,0,1,40,165.64a23.44,23.44,0,0,1-2.74,3,2.5,2.5,0,1,0,3.4,3.66A28.51,28.51,0,0,0,43.94,168.66ZM8.17,107.45a28,28,0,0,0-3.76-14,28.42,28.42,0,0,0-2.84-4.05A2.48,2.48,0,0,0,0,88.52V95.8a.5.5,0,0,0,.08.12,23.07,23.07,0,0,1,2.3,17.59A23.4,23.4,0,0,1,0,119.17v8.16A28.26,28.26,0,0,0,8.17,107.45ZM298.05,89.07a2.51,2.51,0,0,0-.31,3.53A23.18,23.18,0,0,1,300,95.8V88.52A2.5,2.5,0,0,0,298.05,89.07Zm-6.47,38.49a23.43,23.43,0,0,1-3.69,1.72,2.5,2.5,0,0,0,1.7,4.7A28.06,28.06,0,0,0,300,127.33v-8.16A23,23,0,0,1,291.58,127.56Zm-193.11,19A23,23,0,0,1,84,156.81a22.34,22.34,0,0,1-4,.54,2.5,2.5,0,1,0,.24,5,28.14,28.14,0,0,0,22.5-13.1,27.93,27.93,0,0,0,4.36-15,28.4,28.4,0,0,0-.7-6.26,28.87,28.87,0,0,0-1.51-4.7,2.5,2.5,0,0,0-4.61,1.93,23.15,23.15,0,0,1-1.77,21.34ZM140,144.81a23.44,23.44,0,0,1,.36-4.05,2.5,2.5,0,0,0-4.92-.86,27.41,27.41,0,0,0-.44,4.91A28.12,28.12,0,0,0,168,172.54a2.49,2.49,0,0,0,2.07-2.45,2.18,2.18,0,0,0,0-.44,2.5,2.5,0,0,0-2.89-2A23.15,23.15,0,0,1,140,144.81Zm10.09,109.7a23.46,23.46,0,0,1-4.05.41,2.48,2.48,0,0,0-2.46,2.54,2.5,2.5,0,0,0,2.54,2.46,27.63,27.63,0,0,0,4.92-.5,28.11,28.11,0,0,0,22.32-33,28.4,28.4,0,0,0-1.36-4.75,2.5,2.5,0,0,0-4.67,1.79,23.16,23.16,0,0,1-17.24,31Zm38.69-60.74a2.5,2.5,0,1,0,4,2.95,23.15,23.15,0,0,1,38,.8,2.5,2.5,0,0,0,4.58-1.39,2.54,2.54,0,0,0-.42-1.39,29.1,29.1,0,0,0-3.09-3.85,28.17,28.17,0,0,0-39.83-.84A28.34,28.34,0,0,0,188.74,193.77ZM208.6,240.5a2.5,2.5,0,0,0-3.26,1.38,28.14,28.14,0,0,0,20.16,38.17,28.41,28.41,0,0,0,4.91.6,2.5,2.5,0,0,0,2.59-2.4v-.1a2.49,2.49,0,0,0-2.41-2.49,24.25,24.25,0,0,1-4-.5A23.16,23.16,0,0,1,210,243.76,2.5,2.5,0,0,0,208.6,240.5ZM106.89,280.62a23.47,23.47,0,0,1,1.21-3.88,2.5,2.5,0,1,0-4.63-1.88A28.09,28.09,0,0,0,105.41,300h6.08a20.78,20.78,0,0,1-1.4-1.94A23,23,0,0,1,106.89,280.62ZM105.89.78A28,28,0,0,0,123.63,13a28.17,28.17,0,0,0,4.9.6,2.49,2.49,0,0,0,2.59-2.4v-.1a2.49,2.49,0,0,0-2.41-2.49,23.25,23.25,0,0,1-4-.5A23,23,0,0,1,111.49,0h-6.08C105.57.26,105.72.52,105.89.78ZM47.37,216.88a2.25,2.25,0,0,0,0-.44,2.49,2.49,0,0,0-2.9-2,24.19,24.19,0,0,1-4,.36,23.15,23.15,0,0,1-22.8-27.22,2.5,2.5,0,0,0-4.93-.87A28.13,28.13,0,0,0,45.3,219.34,2.5,2.5,0,0,0,47.37,216.88Z"/>',
				'rotated-inverted' => '<path d="M124.68,8.14a23.25,23.25,0,0,0,4,.5,2.49,2.49,0,0,1,2.41,2.49v.1a2.49,2.49,0,0,1-2.59,2.4,28.17,28.17,0,0,1-4.9-.6A28,28,0,0,1,105.89.78c-.17-.26-.32-.52-.48-.78h-90a28.15,28.15,0,0,1,1.95,10.34v.55a28.46,28.46,0,0,1-.53,4.91,2.5,2.5,0,0,1-4.91-1,23.33,23.33,0,0,0,.44-4A23.08,23.08,0,0,0,9.89,0H0V31.58a28.33,28.33,0,0,1,6.5,2.66A27.54,27.54,0,0,1,10.58,37,2.5,2.5,0,0,1,7.41,40.9a22.92,22.92,0,0,0-3.35-2.3A23.55,23.55,0,0,0,0,36.81V88.52a2.48,2.48,0,0,1,1.57.86,28.42,28.42,0,0,1,2.84,4.05,28,28,0,0,1,3.76,14A28.26,28.26,0,0,1,0,127.33v157a28.14,28.14,0,0,1,9.46,6.48A28.29,28.29,0,0,1,15.38,300h90a28.09,28.09,0,0,1-1.94-25.14,2.5,2.5,0,1,1,4.63,1.88,23.47,23.47,0,0,0-1.21,3.88,23,23,0,0,0,3.2,17.44,20.78,20.78,0,0,0,1.4,1.94H300V289.88a23,23,0,0,0-10.39-2.69,23.3,23.3,0,0,0-4.06.28,2.5,2.5,0,0,1-.77-4.94A28.24,28.24,0,0,1,300,284.34v-157A28.06,28.06,0,0,1,289.59,134a2.5,2.5,0,0,1-1.7-4.7,23.43,23.43,0,0,0,3.69-1.72,23,23,0,0,0,8.42-8.39V95.8a23.18,23.18,0,0,0-2.26-3.2A2.49,2.49,0,0,1,300,88.52V36.81a23.15,23.15,0,0,0-27.49,10.65,23.84,23.84,0,0,0-1.67,3.7,2.5,2.5,0,1,1-4.71-1.65,28.56,28.56,0,0,1,2-4.5A28.2,28.2,0,0,1,300,31.58V0H111.49A23,23,0,0,0,124.68,8.14ZM101.58,122a2.49,2.49,0,0,1,3.27,1.34,28.87,28.87,0,0,1,1.51,4.7,28.4,28.4,0,0,1,.7,6.26,28.2,28.2,0,0,1-22,27.42,28.22,28.22,0,0,1-4.89.66,2.5,2.5,0,1,1-.24-5,22.34,22.34,0,0,0,4-.54,23.16,23.16,0,0,0,16.25-31.57A2.49,2.49,0,0,1,101.58,122ZM37.09,172.18a2.5,2.5,0,0,1,.13-3.53,23.44,23.44,0,0,0,2.74-3A23.15,23.15,0,0,0,32.07,131a2.5,2.5,0,1,1,2.28-4.45,28.16,28.16,0,0,1,15.31,25.1,28,28,0,0,1-5.72,17,28.51,28.51,0,0,1-3.32,3.65A2.5,2.5,0,0,1,37.09,172.18ZM12.22,191.61a28.37,28.37,0,0,1,.43-4.92,2.5,2.5,0,0,1,4.93.87,23.15,23.15,0,0,0,22.8,27.22,24.19,24.19,0,0,0,4-.36,2.49,2.49,0,0,1,2.9,2,2.25,2.25,0,0,1,0,.44,2.5,2.5,0,0,1-2.07,2.46,28.12,28.12,0,0,1-33.08-27.73Zm27.4,67.19A23.32,23.32,0,0,0,37,261.92a2.5,2.5,0,0,1-4.1-2.87,29.88,29.88,0,0,1,3.17-3.79,28.21,28.21,0,0,1,39.84,0,29.88,29.88,0,0,1,3.17,3.79,2.54,2.54,0,0,1,.45,1.43A2.5,2.5,0,0,1,75,261.92a23.15,23.15,0,0,0-35.37-3.12Zm125.23-14.05a23.14,23.14,0,0,0,2.44-21.28,2.5,2.5,0,0,1,4.67-1.79,28.38,28.38,0,0,1,1.88,10.14A28.19,28.19,0,0,1,151,259.42a27.63,27.63,0,0,1-4.92.5,2.5,2.5,0,0,1-2.54-2.46,2.48,2.48,0,0,1,2.46-2.54,23.46,23.46,0,0,0,4.05-.41A23,23,0,0,0,164.85,244.75Zm61.7,30.41a24.25,24.25,0,0,0,4,.5,2.49,2.49,0,0,1,2.41,2.49v.1a2.5,2.5,0,0,1-2.59,2.4,28.11,28.11,0,0,1-26.53-34.06,28.11,28.11,0,0,1,1.46-4.71,2.5,2.5,0,1,1,4.63,1.88,23.16,23.16,0,0,0,16.58,31.4ZM281,210.58a2.5,2.5,0,0,1,2.18,2.47c0,.11,0,.22,0,.33a2.51,2.51,0,0,1-2.8,2.16,22.23,22.23,0,0,0-4.06-.17,23.16,23.16,0,0,0-22.06,24.22,23.37,23.37,0,0,0,.55,4,2.5,2.5,0,1,1-4.88,1.1,28.42,28.42,0,0,1-.66-4.89A28.16,28.16,0,0,1,276,210.37,29.36,29.36,0,0,1,281,210.58ZM96.4,200.73a28.78,28.78,0,0,1,4.73,1.44,28.16,28.16,0,0,1,15.56,36.66,28.53,28.53,0,0,1-2.25,4.4,2.5,2.5,0,1,1-4.24-2.65,23.14,23.14,0,0,0-14.84-35,2.5,2.5,0,0,1,1-4.89Zm135.41-9.84a29.1,29.1,0,0,1,3.09,3.85,2.54,2.54,0,0,1,.42,1.39,2.5,2.5,0,0,1-4.58,1.39,23.14,23.14,0,0,0-38-.8,2.5,2.5,0,1,1-4-2.95,28.34,28.34,0,0,1,3.24-3.72,28.17,28.17,0,0,1,39.83.84Zm-64.63-23.27a2.5,2.5,0,0,1,2.89,2,2.18,2.18,0,0,1,0,.44,2.49,2.49,0,0,1-2.07,2.45A28.12,28.12,0,0,1,135,144.81a27.41,27.41,0,0,1,.44-4.91,2.5,2.5,0,0,1,4.92.86,23.44,23.44,0,0,0-.36,4.05,23.15,23.15,0,0,0,27.22,22.81Zm90.62-54a29.46,29.46,0,0,1,.32,4.28v.65a28.18,28.18,0,0,1-28.84,27.48,28.53,28.53,0,0,1-4.91-.56,2.5,2.5,0,1,1,1-4.9,23.38,23.38,0,0,0,4,.46,23.11,23.11,0,0,0,23.45-26.66,2.5,2.5,0,1,1,5-.75ZM177,93.56a28.14,28.14,0,0,1,21.37,37.51,2.5,2.5,0,1,1-4.69-1.73,22.91,22.91,0,0,0,1.08-3.92,23.2,23.2,0,0,0-18.65-26.94,24.49,24.49,0,0,0-4.05-.37,2.49,2.49,0,0,1-2.49-2.5h0a2.51,2.51,0,0,1,2.51-2.49A28.49,28.49,0,0,1,177,93.56ZM110.35,78.29A27.06,27.06,0,0,1,115,80.07a2.48,2.48,0,0,1,1.4,2.24,2.5,2.5,0,0,1-3.6,2.25A23.16,23.16,0,0,0,80.3,98.94a23.59,23.59,0,0,0-.78,4,2.5,2.5,0,0,1-5-.53,29.71,29.71,0,0,1,.94-4.85,28.16,28.16,0,0,1,34.86-19.27ZM31.73,63.37a2.5,2.5,0,0,1,2-2.89,23.13,23.13,0,0,0,17.9-30.67A24,24,0,0,0,50,26.12a2.5,2.5,0,0,1,4.34-2.48,28.27,28.27,0,0,1,3.74,14A28.19,28.19,0,0,1,34.62,65.41,2.51,2.51,0,0,1,31.73,63.37ZM153.9,48.83A22.32,22.32,0,0,0,156.77,46a2.5,2.5,0,0,1,4.42,1.61,2.42,2.42,0,0,1-.59,1.6,28.16,28.16,0,0,1-43.16.05,27.65,27.65,0,0,1-2.83-4.05,2.5,2.5,0,0,1,4.33-2.5A23.92,23.92,0,0,0,121.26,46a23.18,23.18,0,0,0,32.64,2.83Zm66.41-29.61a2.49,2.49,0,0,1-.52,3.49,22.66,22.66,0,0,0-3.06,2.69,23.11,23.11,0,0,0,4,35.28,2.51,2.51,0,0,1,1.11,2.09,2.45,2.45,0,0,1-.42,1.38,2.5,2.5,0,0,1-3.46.7,28.5,28.5,0,0,1-3.86-3.08,28.13,28.13,0,0,1,2.73-43.08A2.49,2.49,0,0,1,220.31,19.22ZM5.86,294.28a23.17,23.17,0,0,1,4,5.72H0V289.88A23.27,23.27,0,0,1,5.86,294.28ZM2.38,113.51A23.4,23.4,0,0,1,0,119.17V95.8a.5.5,0,0,0,.08.12A23.07,23.07,0,0,1,2.38,113.51Z"/>',
				'thumbnail'        => '<path d="M30.3,19.73a5.58,5.58,0,0,0-3.82-6.91,6,6,0,0,0-1-.19A.61.61,0,0,1,25,12a.62.62,0,0,1,.67-.54,7.22,7.22,0,0,1,1.16.23,6.78,6.78,0,0,1,4.65,8.4A6.53,6.53,0,0,1,31,21.17a.59.59,0,0,1-.54.34.66.66,0,0,1-.27-.06.61.61,0,0,1-.27-.81A6.31,6.31,0,0,0,30.3,19.73ZM43.55,7.05a6.58,6.58,0,0,0,1.08-.5.6.6,0,0,0-.6-1,6.46,6.46,0,0,1-.89.41A5.59,5.59,0,0,1,36,2.55a5.91,5.91,0,0,1-.25-.94.6.6,0,0,0-1.19.2A7.19,7.19,0,0,0,34.86,3a6.81,6.81,0,0,0,6.4,4.49A6.58,6.58,0,0,0,43.55,7.05ZM27.78,36.13A7.61,7.61,0,0,0,27.89,35a.61.61,0,0,0-.6-.61h0a.6.6,0,0,0-.6.6,5.33,5.33,0,0,1-.09,1,5.58,5.58,0,0,1-6.49,4.49,4.71,4.71,0,0,1-.94-.26.62.62,0,0,0-.78.36.6.6,0,0,0,.36.77,6.79,6.79,0,0,0,1.15.32,7.07,7.07,0,0,0,1.21.11A6.8,6.8,0,0,0,27.78,36.13Zm-6,19.54h.16a6,6,0,0,0,1-.08.59.59,0,0,0,.5-.68.6.6,0,0,0-.68-.51,6.55,6.55,0,0,1-1,.07,5.58,5.58,0,0,1-5.45-5.72,6.4,6.4,0,0,1,.11-1,.6.6,0,0,0-1.18-.24,6.78,6.78,0,0,0,6.49,8.13ZM40,22.13a.6.6,0,0,0-.6-1,6.79,6.79,0,0,0-1.81,10.24,7.5,7.5,0,0,0,.85.84.56.56,0,0,0,.38.14.6.6,0,0,0,.39-1.06,5.62,5.62,0,0,1-.69-.69,5.58,5.58,0,0,1,.68-7.87A6.37,6.37,0,0,1,40,22.13ZM35.2,46.93a.61.61,0,0,0,.5-.27,5.9,5.9,0,0,1,.61-.77,5.6,5.6,0,0,1,7.9-.19,6.43,6.43,0,0,1,.64.73.6.6,0,1,0,1-.71,6.14,6.14,0,0,0-.78-.89,6.79,6.79,0,0,0-9.6.23,6.71,6.71,0,0,0-.74.93.6.6,0,0,0,.17.84A.64.64,0,0,0,35.2,46.93Zm4.28,11.16a6.71,6.71,0,0,0-1.09-.49A.6.6,0,0,0,38,58.74a5.49,5.49,0,0,1,.89.4A6,6,0,0,1,40,60h1.62A6.81,6.81,0,0,0,39.48,58.09ZM1.61,17.84A7.15,7.15,0,0,0,2,16.7.59.59,0,0,0,1.49,16a.6.6,0,0,0-.72.46,6,6,0,0,1-.28.94,5.87,5.87,0,0,1-.49.93v1.87A7,7,0,0,0,1.61,17.84ZM19.56.93a.6.6,0,0,0-.81.27,6.43,6.43,0,0,1-.52.83,5.55,5.55,0,0,1-3.69,2.15A5.55,5.55,0,0,1,10.41,3.1a6.49,6.49,0,0,1-.73-.66.59.59,0,0,0-.85,0,.6.6,0,0,0,0,.85,7.39,7.39,0,0,0,.88.8,6.75,6.75,0,0,0,4.1,1.38,6.77,6.77,0,0,0,5.41-2.69,6.47,6.47,0,0,0,.63-1A.6.6,0,0,0,19.56.93ZM15,17.2a5.53,5.53,0,0,1-2.46-3.49,5.16,5.16,0,0,1-.14-1,.6.6,0,1,0-1.2,0A6.45,6.45,0,0,0,11.36,14,6.8,6.8,0,0,0,18,19.27a7.06,7.06,0,0,0,1.51-.17,7.8,7.8,0,0,0,1.13-.36.61.61,0,0,0-.47-1.12,5.3,5.3,0,0,1-.93.3A5.57,5.57,0,0,1,15,17.2Zm.43,10a6.35,6.35,0,0,1,1,.08.6.6,0,0,0,.7-.49.59.59,0,0,0-.49-.69A6.8,6.8,0,0,0,8.74,34a.61.61,0,0,0,.6.5h.1a.59.59,0,0,0,.49-.69,5.5,5.5,0,0,1-.09-1A5.59,5.59,0,0,1,15.43,27.2ZM2.72,49.07a.61.61,0,0,0-.16.84.62.62,0,0,0,.5.27.56.56,0,0,0,.33-.1,6.93,6.93,0,0,0,.93-.75,6.73,6.73,0,0,0,2.09-4.75,6.76,6.76,0,0,0-1.88-4.85,7.52,7.52,0,0,0-.9-.78.6.6,0,1,0-.71,1,6.62,6.62,0,0,1,.74.65,5.59,5.59,0,0,1-.17,7.89A5.17,5.17,0,0,1,2.72,49.07ZM59.5,11.54a.6.6,0,0,0,.35,1.1.6.6,0,0,0,.34-.11,6.79,6.79,0,0,0,.92-10.37,7.58,7.58,0,0,0-.92-.76.6.6,0,0,0-.84.15.61.61,0,0,0,.15.84,5.1,5.1,0,0,1,.75.63,5.58,5.58,0,0,1,0,7.89A5.1,5.1,0,0,1,59.5,11.54ZM71.93,60a6.82,6.82,0,0,0-7.1-6.47,6.85,6.85,0,0,0-1.18.17.6.6,0,0,0-.46.72.61.61,0,0,0,.72.45,5.6,5.6,0,0,1,5,1.32A5.59,5.59,0,0,1,70.72,60h1.21Zm2-42.15a6.27,6.27,0,0,0,.35-1.14.59.59,0,0,0-.46-.71.6.6,0,0,0-.72.46,6,6,0,0,1-.28.94,5.59,5.59,0,0,1-7.27,3.08,6.57,6.57,0,0,1-.88-.44.59.59,0,0,0-.83.19.6.6,0,0,0,.2.83,7,7,0,0,0,1.06.54,6.85,6.85,0,0,0,2.53.49A6.78,6.78,0,0,0,73.9,17.84Zm-5.84,17.4a8.16,8.16,0,0,0,1.14-.33.6.6,0,0,0-.43-1.13,5.57,5.57,0,0,1-7.48-4.15,5.25,5.25,0,0,1-.1-1,.6.6,0,0,0-.61-.59.61.61,0,0,0-.6.61,7.87,7.87,0,0,0,.12,1.19,6.82,6.82,0,0,0,6.66,5.5A7.23,7.23,0,0,0,68.06,35.24ZM75.93,39a.6.6,0,1,0-.71,1,6.51,6.51,0,0,1,.73.65,5.59,5.59,0,0,1-.16,7.89,5.73,5.73,0,0,1-.77.61.61.61,0,0,0-.16.84.6.6,0,0,0,.5.27.58.58,0,0,0,.33-.1,6.93,6.93,0,0,0,.93-.75,6.78,6.78,0,0,0,.2-9.6A7.42,7.42,0,0,0,75.93,39ZM55.57,49.62h0a.6.6,0,0,0,.6-.58,6.12,6.12,0,0,1,.12-1,5.59,5.59,0,0,1,6.63-4.29,5.36,5.36,0,0,1,.94.29.59.59,0,0,0,.78-.33.6.6,0,0,0-.33-.79,6.69,6.69,0,0,0-1.13-.35,6.81,6.81,0,0,0-8.07,5.21A6.56,6.56,0,0,0,55,49,.6.6,0,0,0,55.57,49.62Zm1.15-30.43a.62.62,0,0,0-.33-.79,7.1,7.1,0,0,0-1.14-.35,6.72,6.72,0,0,0-4.92.82l-.19.12a6.73,6.73,0,0,0-3,4.27A6.57,6.57,0,0,0,47,24.44a.62.62,0,0,0,.58.63h0a.6.6,0,0,0,.6-.58,8,8,0,0,1,.12-1,5.6,5.6,0,0,1,2-3.17,3.9,3.9,0,0,1,.46-.34,5.56,5.56,0,0,1,5.14-.48A.61.61,0,0,0,56.72,19.19Zm12.94-16a6.91,6.91,0,0,0,.1,1.19.61.61,0,0,0,.6.49h.1A.59.59,0,0,0,71,4.18,5.5,5.5,0,0,1,71.88,0H70.46A6.75,6.75,0,0,0,69.66,3.2Z"/>',
			),
			'width'      => '300px',
			'height'     => '300px',
		);
	}
}

return new ET_Builder_Pattern_Smiles();

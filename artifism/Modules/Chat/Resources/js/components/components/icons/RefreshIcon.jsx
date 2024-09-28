const RefreshIcon = () => {
	return (
		<svg
			xmlns="http://www.w3.org/2000/svg"
			version="1.1"
			width="30"
			height="30"
			x="0"
			y="0"
			viewBox="0 0 512 512"
		>
			<g>
				<linearGradient
					id="a"
					x1="256"
					x2="256"
					y1="-2.802"
					y2="509.199"
					gradientUnits="userSpaceOnUse"
				>
					<stop stopOpacity="1" stopColor="#01f1fe" offset="0"></stop>
					<stop stopOpacity="1" stopColor="#763cd4" offset="1"></stop>
				</linearGradient>
				<path
					fill="url(#a)"
					d="M470.58 297.42c0 57.316-22.32 111.202-62.849 151.731S313.316 512 256 512s-111.202-22.32-151.731-62.849C63.741 408.623 41.42 354.737 41.42 297.42s22.32-111.202 62.849-151.731c33.931-33.93 77.225-55.088 124.055-61.081l-29.981-29.981c-12.497-12.497-12.497-32.758 0-45.255s32.758-12.497 45.255 0l82.842 82.842c12.497 12.497 12.497 32.758 0 45.255l-82.842 82.842c-6.249 6.249-14.438 9.373-22.627 9.373s-16.379-3.124-22.627-9.373c-12.497-12.497-12.497-32.758 0-45.255l24.537-24.537c-67.15 15.131-117.46 75.248-117.46 146.901C105.42 380.45 172.97 448 256 448s150.58-67.55 150.58-150.58c0-17.673 14.327-32 32-32s32 14.327 32 32z"
					opacity="1"
					data-original="url(#a)"
				></path>
			</g>
		</svg>
	);
};

export default RefreshIcon;

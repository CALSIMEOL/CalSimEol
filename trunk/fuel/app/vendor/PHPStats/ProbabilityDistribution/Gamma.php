<?php
/**
 * PHP Statistics Library
 *
 * Copyright (C) 2011-2012 Michael Cordingley<Michael.Cordingley@gmail.com>
 * 
 * This library is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Library General Public License as published
 * by the Free Software Foundation; either version 3 of the License, or 
 * (at your option) any later version.
 * 
 * This library is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY
 * or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Library General Public
 * License for more details.
 * 
 * You should have received a copy of the GNU Library General Public License
 * along with this library; if not, write to the Free Software Foundation, 
 * Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA
 * 
 * LGPL Version 3
 *
 * @package PHPStats
 */
 
namespace PHPStats\ProbabilityDistribution;

/**
 * Gamma class
 * 
 * Represents the gamma distribution, a generalization of the exponential,
 * chi-square, and Erlang distributions.  When k is an integer, then this
 * is the Erlang distribution, which represents the sum of k independent
 * exponentially distributed random variables.
 * 
 * For more information, see: http://en.wikipedia.org/wiki/Gamma_distribution
 */
class Gamma extends ProbabilityDistribution {
	private $k;
	private $theta;
	
	/**
	 * Constructor function
	 * 
	 * @param float $k The shape parameter
	 * @param float $theta The size parameter
	 */
	public function __construct($k = 1.0, $theta = 1.0) {
		$this->k = $k;
		$this->theta = $theta;
	}
	
	/**
	 * Returns a random float
	 * 
	 * @return float The random variate.
	 */
	public function rvs() {
		return self::getRvs($this->k, $this->theta);
	}
	
	/**
	 * Returns the probability distribution function
	 * 
	 * @param float $x The test value
	 * @return float The probability
	 */
	public function pdf($x) {
		return self::getPdf($x, $this->k, $this->theta);
	}
	
	/**
	 * Returns the cumulative distribution function, the probability of getting the test value or something below it
	 * 
	 * @param float $x The test value
	 * @return float The probability
	 */
	public function cdf($x) {
		return self::getCdf($x, $this->k, $this->theta);
	}
	
	/**
	 * Returns the survival function, the probability of getting the test value or something above it
	 * 
	 * @param float $x The test value
	 * @return float The probability
	 */
	public function sf($x) {
		return self::getSf($x, $this->k, $this->theta);
	}
	
	/**
	 * Returns the percent-point function, the inverse of the cdf
	 * 
	 * @param float $x The test value
	 * @return float The value that gives a cdf of $x
	 * @todo Unimplemented dependencies
	 */
	public function ppf($x) {
		return self::getPpf($x, $this->k, $this->theta);
	}
	
	/**
	 * Returns the inverse survival function, the inverse of the sf
	 * 
	 * @param float $x The test value
	 * @return float The value that gives an sf of $x
	 * @todo Unimplemented dependencies
	 */
	public function isf($x) {
		return self::getIsf($x, $this->k, $this->theta);
	}
	
	/**
	 * Returns the moments of the distribution
	 * 
	 * @param string $moments Which moments to compute. m for mean, v for variance, s for skew, k for kurtosis.  Default 'mv'
	 * @return type array A dictionary containing the first four moments of the distribution
	 */
	public function stats($moments = 'mv') {
		return self::getStats($moments, $this->k, $this->theta);
	}
	
	/**
	 * Returns a random float between $minimum and $minimum plus $maximum
	 * 
	 * @param float $k Shape parameter
	 * @param float $theta Scale parameter
	 * @return float The random variate.
	 * @static
	 */
	public static function getRvs($k = 1, $theta = 1) {
		$floork = floor($k);
		$fractionalk = $k - $floork;

		$sumLogUniform = 0;
		for ($index = 1; $index <= $floork; $index++) {
			$sumLogUniform += log(self::randFloat());
		}

		if ($fractionalk > 0) {
			$m = 0;
			$xi = 0;
			$V = array(0);
			do {
				$m++;

				$V[] = self::randFloat();
				$V[] = self::randFloat();
				$V[] = self::randFloat();

				if ($V[3*$m - 2] <= M_E/(M_E + $fractionalk)) {
					$xi = pow($V[3*$m - 1], 1/$fractionalk);
					$eta = $V[3*$m]*pow($xi, $fractionalk - 1);
				}
				else {
					$xi = 1 - log($V[3*$m - 1]);
					$eta = $V[3*$m]*exp(-$xi);
				}
			} while($eta > pow($xi, $fractionalk - 1)*exp(-$xi));
		}
		else {
			$xi = 0;
		}

		return $theta*($xi - $sumLogUniform);
	}
	
	/**
	 * Returns the probability distribution function
	 * 
	 * @param float $x The test value
	 * @param float $k Shape parameter
	 * @param float $theta Scale parameter
	 * @return float The probability
	 * @static
	 */
	public static function getPdf($x, $k = 1, $theta = 1) {
		return pow($x, $k - 1)*exp(-$x/$theta)/(\PHPStats\Stats::gamma($k)*pow($theta, $k));
	}
	
	/**
	 * Returns the cumulative distribution function, the probability of getting the test value or something below it
	 * 
	 * @param float $x The test value
	 * @param float $k Shape parameter
	 * @param float $theta Scale parameter
	 * @return float The probability
	 * @static
	 */
	public static function getCdf($x, $k = 1, $theta = 1) {
		return \PHPStats\Stats::lowerGamma($k, $x/$theta)/\PHPStats\Stats::gamma($k);
	}
	
	/**
	 * Returns the survival function, the probability of getting the test value or something above it
	 * 
	 * @param float $x The test value
	 * @param float $k Shape parameter
	 * @param float $theta Scale parameter
	 * @return float The probability
	 * @static
	 */
	public static function getSf($x, $k = 1, $theta = 1) {
		return 1.0 - self::getCdf($x, $k, $theta);
	}
	
	/**
	 * Returns the percent-point function, the inverse of the cdf
	 * 
	 * @param float $x The test value
	 * @param float $k Shape parameter
	 * @param float $theta Scale parameter
	 * @return float The value that gives a cdf of $x
	 * @static
	 */
	public static function getPpf($x, $k = 1, $theta = 1) {
		return $theta * \PHPStats\Stats::ilowerGamma($k, \PHPStats\Stats::gamma($k) * $x);
	}
	
	/**
	 * Returns the inverse survival function, the inverse of the sf
	 * 
	 * @param float $x The test value
	 * @param float $k Shape parameter
	 * @param float $theta Scale parameter
	 * @return float The value that gives an sf of $x
	 * @static
	 */
	public static function getIsf($x, $k = 1, $theta = 1) {
		return self::getPpf(1.0 - $x, $k, $theta);
	}
	
	/**
	 * Returns the moments of the distribution
	 * 
	 * @param string $moments Which moments to compute. m for mean, v for variance, s for skew, k for kurtosis.  Default 'mv'
	 * @param float $k Shape parameter
	 * @param float $theta Scale parameter
	 * @return type array A dictionary containing the first four moments of the distribution
	 * @static
	 */
	public static function getStats($moments = 'mv', $k = 1, $theta = 1) {
		$return = array();
		
		if (strpos($moments, 'm') !== FALSE) $return['mean'] = $k*$theta;
		if (strpos($moments, 'v') !== FALSE) $return['variance'] = $k*pow($theta, 2);
		if (strpos($moments, 's') !== FALSE) $return['skew'] = 2/sqrt($k);
		if (strpos($moments, 'k') !== FALSE) $return['kurtosis'] = 6/$k;
		
		return $return;
	}
}
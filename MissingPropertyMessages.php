<?php
/* *********************************************************************
 * This Original Work is copyright of 51 Degrees Mobile Experts Limited.
 * Copyright 2019 51 Degrees Mobile Experts Limited, 5 Charlotte Close,
 * Caversham, Reading, Berkshire, United Kingdom RG4 7BY.
 *
 * This Original Work is licensed under the European Union Public Licence (EUPL)
 * v.1.2 and is subject to its terms as set out below.
 *
 * If a copy of the EUPL was not distributed with this file, You can obtain
 * one at https://opensource.org/licenses/EUPL-1.2.
 *
 * The 'Compatible Licences' set out in the Appendix to the EUPL (as may be
 * amended by the European Commission) shall be deemed incompatible for
 * the purposes of the Work and the provisions of the compatibility
 * clause in Article 5 of the EUPL shall not apply.
 *
 * If using the Work as, or as part of, a network application, by
 * including the attribution notice(s) required under Article 5 of the EUPL
 * in the end user terms of the application under an appropriate heading,
 * such notice(s) shall fulfill the requirements of that article.
 * ********************************************************************* */

namespace fiftyone\pipeline\engines;

class MissingPropertyMessages {
    const PREFIX = "Property '%s' not found in data for element '%s'. ";
    const DATA_UPGRADE_REQUIRED =
        "This is because your license and/or data file " .
        "does not include this property. The property is available " .
        "with the %s license/data for the %s";
    const PROPERTY_EXCLUDED =
        "This is because the property has been excluded when configuring " .
        "the engine.";
    const PRODUCT_NOT_IN_CLOUD_RESOURCE =
        "This is because your resource key does not include access to " .
        "any properties under '%s'. For more details on resource keys, " .
        "see our explainer: " .
        "https://51degrees.com/documentation/_info__resourcekeys.html";
    const PROPERTY_NOT_IN_CLOUD_RESOURCE =
        "This is because your resource key does not include access to " .
        "this property. Properties that are included for this key under " .
        "'%s' are %s. For more details on resource keys, see our " .
        "explainer: " .
        "https://51degrees.com/documentation/4.1/_info__resourcekeys.html";
    const UNKNOWN =
        "The reason for this is unknown. Please check that the aspect " .
        "and property name are correct.";
}

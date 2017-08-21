<?php
// I can't think of a better way to approach this.

if (isset($_REQUEST["l"]) || isset($_REQUEST["c"]))
{
	if ($_REQUEST["l"] == "fr")
	{
		if ($_REQUEST["c"] == "US")
		{
			header("Location: http://rs.wii.rc24.xyz/content/US_FR/recommended_links_FR.html");
		}

		else if ($_REQUEST["c"] == "CA")
		{
			header("Location: http://rs.wii.rc24.xyz/content/CA_FR/recommended_links_FR.html");
		}

		else
		{
			header("Location: http://rs.wii.rc24.xyz/content/LA_FR/recommended_links_FR.html");
		}
	}

	else if ($_REQUEST["l"] == "es")
	{
		if ($_REQUEST["c"] == "US")
		{
			header("Location: http://rs.wii.rc24.xyz/content/US_SP/recommended_links_SP.html");
		}

		else
		{
			header("Location: http://rs.wii.rc24.xyz/content/LA_SP/recommended_links_SP.html");
		}
	}

	else if ($_REQUEST["l"] == "en")
	{
		if ($_REQUEST["c"] == "US")
		{
			header("Location: http://rs.wii.rc24.xyz/content/US_EN/recommended_links.html");
		}

		else if ($_REQUEST["c"] == "CA")
		{
			header("Location: http://rs.wii.rc24.xyz/content/CA_EN/recommended_links.html");
		}

		else
		{
			header("Location: http://rs.wii.rc24.xyz/content/LA_EN/recommended_links.html");
		}
	}

	else
	{
		header("Location: http://rs.wii.rc24.xyz/content/LA_EN/recommended_links.html");
	}
}

else
{
	header("Location: http://rs.wii.rc24.xyz/content/LA_EN/recommended_links.html");
}
?>

package com.luckydevvvil.googlemapsproject;

import java.io.InputStream;
import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

public class MyItemReader {

    /*
     * This matches only once in whole input,
     * so Scanner.next returns whole InputStream as a String.
     * http://stackoverflow.com/a/5445161/2183804
     */
    private static final String REGEX_INPUT_BOUNDARY_BEGINNING = "\\A";

    public List<MyItem> read(InputStream inputStream) throws JSONException {
        List<MyItem> items = new ArrayList<MyItem>();
        String json = new Scanner(inputStream).useDelimiter(REGEX_INPUT_BOUNDARY_BEGINNING).next();
        JSONArray array = new JSONArray(json);

        //String title = null;
        //String snippet = null;

        for (int i = 0; i < array.length(); i++) {

            JSONObject object = array.getJSONObject(i);
            double lat = object.getDouble("lat");
            double lng = object.getDouble("lng");
            /*if (!object.isNull("title")) {
                title = object.getString("title");
            }

            if (!object.isNull("snippet")) {
                snippet = object.getString("snippet");
            }*/
            items.add(new MyItem(lat, lng));
        }
        return items;
    }

}

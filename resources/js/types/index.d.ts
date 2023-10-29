export interface User {
    id: number;
    name: string;
    email: string;
    email_verified_at: string;
}

export type PageProps<T extends Record<string, unknown> = Record<string, unknown>> = T & {
    auth: {
        user: User;
    };
};

export interface WeatherDto {
    cityName: string;
    countryName: string;
    languageName: string;
    temperature: string;
    weatherCode: string;
    sunrise: string;
    sunset: string;
    weatherImage: string | null;
    conditions: string | null;
}
